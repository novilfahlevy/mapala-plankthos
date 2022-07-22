<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Trait\Upload;
use Exception;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    use Upload;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries = Gallery::paginate(10);
        return view('backend.pages.gallery.index', compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.gallery.create');
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
            'title' => ['required'],
            'photo' => ['required', 'file', 'max:5000']
        ]);

        try {
            $gallery = new Gallery();
            $gallery->title = $request->title;
            $gallery->division = $request->division;
    
            $filename = $this->saveFile($request->file('photo'));
            if ($filename) {
                $gallery->photo_url = $filename;
                $gallery->save();
            }
    
            return redirect()->route('galeri.index')->with('alert', [
                'status' => 200,
                'message' => 'Galeri berhasil ditambahkan.'
            ]);
        } catch (Exception $error) {
            return redirect()->route('galeri.index')->with('alert', [
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
        $gallery = Gallery::find($id);
        return view('backend.pages.gallery.edit', compact('gallery'));
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
            'title' => ['required'],
            'photo' => ['file', 'max:5000']
        ]);
        
        try {
            $gallery = Gallery::find($id);
            $gallery->title = $request->title;
            $gallery->division = $request->division;

            $photo = $request->file('photo');
            if ($photo) {
                $filename = $this->saveFile($photo, $gallery->photo_url);
                if ($filename) {
                    $gallery->photo_url = $filename;
                }
            }

            $gallery->save();
            
            return redirect()->route('galeri.index')->with('alert', [
                'status' => 200,
                'message' => 'Galeri berhasil diedit.'
            ]);
        } catch (Exception $error) {
            return redirect()->route('galeri.index')->with('alert', [
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
            $gallery = Gallery::find($id);
            $this->deleteFile($gallery->photo_url);
            $gallery->delete();
            return redirect()->route('galeri.index')->with('alert', [
                'status' => 200,
                'message' => 'Galeri berhasil dihapus.'
            ]);
        } catch (Exception $error) {
            return redirect()->route('galeri.index')->with('alert', [
                'status' => $error->getCode(),
                'message' => $error->getMessage()
            ]);
        }
    }
}
