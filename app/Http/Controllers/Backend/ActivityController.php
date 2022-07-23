<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use App\Trait\Upload;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ActivityController extends Controller
{
    use Upload;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activities = Activity::paginate();
        return view('backend.pages.activity.index', compact('activities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.activity.create');
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
            'title' => ['required', 'unique:activities'],
            'content' => ['required'],
            'thumbnail' => ['required', 'file', 'max:5000'],
        ]);

        try {
            $activity = new Activity();
            $activity->user_id = auth()->user()->id;
            $activity->title = $request->title;
            $activity->slug = Str::slug($request->title);
            $activity->content = $request->content;
    
            $filename = $this->resizeAndSave($request->file('thumbnail'), 1920, 1080);
            if ($filename) {
                $activity->thumbnail_url = $filename;
                $activity->save();
            }
    
            return redirect()->route('admin.kegiatan.index')->with('alert', [
                'status' => 200,
                'message' => 'Kegiatan berhasil ditambahkan.'
            ]);
        } catch (Exception $error) {
            return redirect()->route('admin.kegiatan.index')->with('alert', [
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
        $activity = Activity::find($id);
        $comments = $activity->comments()->orderByDesc('created_at')->paginate(10);
        return view('backend.pages.activity.edit', compact('activity', 'comments'));
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
            'content' => ['required'],
            'thumbnail' => ['file', 'max:5000'],
        ]);
        
        try {
            $activity = Activity::find($id);
            $activity->title = $request->title;
            $activity->slug = Str::slug($request->title);
            $activity->content = $request->content;

            $thumbnail = $request->file('thumbnail');
            if ($thumbnail) {
                $filename = $this->resizeAndSave($thumbnail, 1920, 1080, $activity->thumbnail_url);
                if ($filename) {
                    $activity->thumbnail_url = $filename;
                }
            }

            $activity->save();
            
            return redirect()->route('admin.kegiatan.index')->with('alert', [
                'status' => 200,
                'message' => 'Kegiatan berhasil diedit.'
            ]);
        } catch (Exception $error) {
            return redirect()->route('admin.kegiatan.index')->with('alert', [
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
            $activity = Activity::find($id);
            $this->deleteFile($activity->thumbnail_url);
            $activity->delete();
            return redirect()->route('admin.kegiatan.index')->with('alert', [
                'status' => 200,
                'message' => 'Kegiatan berhasil dihapus.'
            ]);
        } catch (Exception $error) {
            return redirect()->route('admin.kegiatan.index')->with('alert', [
                'status' => $error->getCode(),
                'message' => $error->getMessage()
            ]);
        }
    }
}
