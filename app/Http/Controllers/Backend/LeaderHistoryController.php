<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\LeaderHistory;
use App\Trait\Upload;
use App\Trait\UserAction;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LeaderHistoryController extends Controller
{
    use Upload, UserAction;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $leaders = LeaderHistory::paginate(10);
        return view('backend.pages.leader-history.index', compact('leaders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.leader-history.create');
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
            'nim' => ['required'],
            'from_year' => ['required'],
            'to_year' => ['required'],
            'photo' => ['required', 'file', 'max:5000']
        ]);

        try {
            $leader = new LeaderHistory();
            $leader->name = $request->name;
            $leader->nim = $request->nim;
            $leader->from_year = $request->from_year;
            $leader->to_year = $request->to_year;
    
            $filename = $this->resizeAndSave($request->file('photo'), 1800, 2400);
            if ($filename) {
                $leader->photo_url = $filename;
                $leader->save();
            }

            $this->logAction('Membuat daftar ketua terdahulu "'.$request->name.'"');
    
            return redirect()->route('ketua-terdahulu.index')->with('alert', [
                'status' => 200,
                'message' => 'Ketua berhasil ditambahkan.'
            ]);
        } catch (Exception $error) {
            return redirect()->route('ketua-terdahulu.index')->with('alert', [
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
        $leader = LeaderHistory::find($id);
        return view('backend.pages.leader-history.edit', compact('leader'));
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
            'nim' => ['required'],
            'from_year' => ['required'],
            'to_year' => ['required'],
        ]);

        try {
            $leader = LeaderHistory::find($id);
            $leader->name = $request->name;
            $leader->nim = $request->nim;
            $leader->from_year = $request->from_year;
            $leader->to_year = $request->to_year;

            $photo = $request->file('photo');
            if ($photo) {
                $filename = $this->saveFile($photo, 1800, 2400, $leader->photo_url);
                if ($filename) {
                    $leader->photo_url = $filename;
                }
            }

            $leader->save();

            $this->logAction('Mengedit daftar ketua terdahulu "'.$request->name.'"');
            
            return redirect()->route('ketua-terdahulu.index')->with('alert', [
                'status' => 200,
                'message' => 'Ketua berhasil diedit.'
            ]);
        } catch (Exception $error) {
            return redirect()->route('ketua-terdahulu.index')->with('alert', [
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
            $leader = LeaderHistory::find($id);
            $name = $leader->name;

            $this->deleteFile($leader->photo_url);
            $leader->delete();

            $this->logAction('Menghapus daftar ketua terdahulu "'.$name.'"');

            return redirect()->route('ketua-terdahulu.index')->with('alert', [
                'status' => 200,
                'message' => 'Ketua berhasil dihapus.'
            ]);
        } catch (Exception $error) {
            return redirect()->route('ketua-terdahulu.index')->with('alert', [
                'status' => $error->getCode(),
                'message' => $error->getMessage()
            ]);
        }
    }
}
