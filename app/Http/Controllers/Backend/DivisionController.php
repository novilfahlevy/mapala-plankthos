<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Division;
use App\Trait\Upload;
use App\Trait\UserAction;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DivisionController extends Controller
{
    use UserAction, Upload;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $divisions = Division::paginate(10);
        return view('backend.pages.division.index', compact('divisions'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.division.create');
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
            'description' => ['required'],
        ]);

        try {
            $division = new Division();
            $division->name = $request->name;
            $division->slug = Str::slug($request->name);
            $division->description = $request->description;

            $logo = $request->file('logo');
            if ($logo) {
                $filename = $this->resizeAndSave($logo, 400, 400);
                if ($filename) {
                    $division->logo_url = $filename;
                }
            }

            $background = $request->file('background');
            if ($background) {
                $filename = $this->resizeAndSave($background, 1080, 810);
                if ($filename) {
                    $division->background_url = $filename;
                }
            }

            $division->save();

            $this->logAction('Membuat divisi "'.$request->name.'"');

            return redirect()->route('admin.divisi.index')->with('alert', [
                'status' => 200,
                'message' => 'Divisi berhasil ditambahkan.'
            ]);
        } catch (Exception $error) {
            return redirect()->route('admin.divisi.index')->with('alert', [
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
        $division = Division::findOrFail($id);
        return view('backend.pages.division.edit', compact('division'));
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
            'description' => ['required'],
        ]);
        
        try {
            $division = Division::findOrFail($id);
            $division->name = $request->name;
            $division->slug = Str::slug($request->name);
            $division->description = $request->description;

            $logo = $request->file('logo');
            if ($logo) {
                $filename = $this->resizeAndSave($logo, 400, 400, $division->logo_url);
                if ($filename) {
                    $division->logo_url = $filename;
                }
            }

            $background = $request->file('background');
            if ($background) {
                $filename = $this->resizeAndSave($background, 1080, 810, $division->background_url);
                if ($filename) {
                    $division->background_url = $filename;
                }
            }

            $division->save();

            $this->logAction('Mengedit divisi "'.$request->name.'"');

            return redirect()->route('admin.divisi.index')->with('alert', [
                'status' => 200,
                'message' => 'Divisi berhasil diedit.'
            ]);
        } catch (Exception $error) {
            return redirect()->route('admin.divisi.index')->with('alert', [
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
            $division = Division::find($id);
            $name = $division->name;

            $division->delete();

            $this->logAction('Menghapus divisi "'.$name.'"');

            return redirect()->route('admin.divisi.index')->with('alert', [
                'status' => 200,
                'message' => 'Divisi berhasil dihapus.'
            ]);
        } catch (Exception $error) {
            return redirect()->route('admin.divisi.index')->with('alert', [
                'status' => $error->getCode(),
                'message' => $error->getMessage()
            ]);
        }
    }
}
