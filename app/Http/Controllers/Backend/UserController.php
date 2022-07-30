<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Trait\UserAction;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    use UserAction;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = auth()->user()->id;
        $users = User::orderByRaw('IF(id = '.$id.', 1, 0) ASC')->paginate(10);
        return view('backend.pages.users.index', compact('users'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8']
        ]);

        try {
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->save();

            $this->logAction('Membuat akun pengguna "'.$request->name.'"');

            return redirect()->route('pengguna.index')->with('alert', [
                'status' => 200,
                'message' => 'Pengguna berhasil ditambahkan.'
            ]);
        } catch (Exception $error) {
            return redirect()->route('pengguna.index')->with('alert', [
                'status' => $error->getCode(),
                'message' => $error->getMessage()
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('backend.pages.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['min:8']
        ]);
        
        try {
            $user = User::findOrFail($id);
            $user->name = $request->name;
            $user->email = $request->email;
            if ($request->password) {
                $user->password = Hash::make($request->password);
            }

            $user->save();

            return redirect()->route('pengguna.index')->with('alert', [
                'status' => 200,
                'message' => 'Pengguna berhasil diedit.'
            ]);
        } catch (Exception $error) {
            return redirect()->route('pengguna.index')->with('alert', [
                'status' => $error->getCode(),
                'message' => $error->getMessage()
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $user = User::find($id);
            $name = $user->name;

            $user->delete();

            $this->logAction('Menghapus akun pengguna "'.$name.'"');

            return redirect()->route('pengguna.index')->with('alert', [
                'status' => 200,
                'message' => 'Pengguna berhasil dihapus.'
            ]);
        } catch (Exception $error) {
            if ($error->getCode() == 23000) {
                return redirect()->route('pengguna.index')->with('alert', [
                    'status' => $error->getCode(),
                    'message' => 'Pengguna tidak dapat dihapus karena masih terhubung dengan beberapa data.'
                ]);
            }

            return redirect()->route('pengguna.index')->with('alert', [
                'status' => $error->getCode(),
                'message' => $error->getMessage()
            ]);
        }
    }
}
