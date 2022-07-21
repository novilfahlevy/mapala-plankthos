<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\LeaderHistory;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LeaderHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $leaders = LeaderHistory::all();
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
        try {
            $leader = new LeaderHistory();
            $leader->name = $request->name;
            $leader->nim = $request->nim;
            $leader->from_year = $request->from_year;
            $leader->to_year = $request->to_year;
    
            $filename = Storage::disk('uploads')->put('/', $request->file('photo'));
            if ($filename) {
                $leader->photo_url = $filename;
                $leader->save();
            }
    
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
        try {
            $leader = LeaderHistory::find($id);
            $leader->name = $request->name;
            $leader->nim = $request->nim;
            $leader->from_year = $request->from_year;
            $leader->to_year = $request->to_year;

            $photo = $request->file('photo');
            if ($photo) {
                $filename = Storage::disk('uploads')->put('/', $photo);
                if ($filename) {
                    $leader->photo_url = $filename;
                }
            }

            $leader->save();
            
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
            LeaderHistory::destroy($id);
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