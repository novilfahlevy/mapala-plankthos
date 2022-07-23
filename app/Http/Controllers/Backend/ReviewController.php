<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Review;
use App\Trait\Upload;
use Exception;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    use Upload;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reviews = Review::paginate(10);
        return view('backend.pages.review.index', compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.review.create');
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
            'position' => ['required'],
            'comment' => ['required'],
            'photo' => ['required', 'file', 'max:5000']
        ]);

        try {
            $review = new Review();
            $review->name = $request->name;
            $review->position = $request->position;
            $review->comment = $request->comment;
    
            $filename = $this->resizeAndSave($request->file('photo'), 400, 400);
            if ($filename) {
                $review->photo_url = $filename;
                $review->save();
            }
    
            return redirect()->route('ulasan.index')->with('alert', [
                'status' => 200,
                'message' => 'Ulasan berhasil ditambahkan.'
            ]);
        } catch (Exception $error) {
            return redirect()->route('ulasan.index')->with('alert', [
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
        $review = Review::find($id);
        return view('backend.pages.review.edit', compact('review'));
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
            'position' => ['required'],
            'comment' => ['required'],
        ]);

        try {
            $review = Review::find($id);
            $review->name = $request->name;
            $review->position = $request->position;
            $review->comment = $request->comment;

            $photo = $request->file('photo');
            if ($photo) {
                $filename = $this->resizeAndSave($photo, 400, 400, $review->photo_url);
                if ($filename) {
                    $review->photo_url = $filename;
                }
            }

            $review->save();
            
            return redirect()->route('ulasan.index')->with('alert', [
                'status' => 200,
                'message' => 'Ulasan berhasil diedit.'
            ]);
        } catch (Exception $error) {
            return redirect()->route('ulasan.index')->with('alert', [
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
            $review = Review::find($id);
            $this->deleteFile($review->photo_url);
            $review->delete();
            return redirect()->route('ulasan.index')->with('alert', [
                'status' => 200,
                'message' => 'Ulasan berhasil dihapus.'
            ]);
        } catch (Exception $error) {
            return redirect()->route('ulasan.index')->with('alert', [
                'status' => $error->getCode(),
                'message' => $error->getMessage()
            ]);
        }
    }
}
