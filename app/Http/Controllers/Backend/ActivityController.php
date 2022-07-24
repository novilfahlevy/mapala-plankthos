<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use App\Models\Division;
use App\Trait\Upload;
use App\Trait\UserAction;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ActivityController extends Controller
{
    use Upload, UserAction;

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
        $divisions = Division::all();
        return view('backend.pages.activity.create', compact('divisions'));
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
            // 'thumbnail' => ['required', 'file', 'max:5000'],
        ]);

        try {
            $activity = new Activity();
            $activity->user_id = auth()->user()->id;
            $activity->title = $request->title;
            $activity->slug = Str::slug($request->title);
            $activity->content = $request->content;
            $activity->tanggal = $request->tanggal;
            $activity->division_id = $request->divisionId ? $request->divisionId : null;
    
            $filename = $this->resizeAndSave($request->file('thumbnail'), 1920, 1080);
            if ($filename) {
                $activity->thumbnail_url = $filename;
                $activity->save();
            }

            $photos = $request->file('photos');
            if ($photos) {
                foreach ($photos as $photo) {
                    $photoName = $this->saveFile($photo);
                    $activity->photos()->create(['photo_url' => $photoName]);
                }
            }

            $this->logAction('Membuat kegiatan "'.$request->title.'"');
    
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
        $divisions = Division::all();
        $activity = Activity::find($id);
        // $comments = $activity->comments()->orderByDesc('created_at')->paginate(10);
        return view('backend.pages.activity.edit', compact(
            'activity',
            'divisions',
            // 'comments'
        ));
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
            // 'thumbnail' => ['file', 'max:5000'],
        ]);
        
        try {
            $activity = Activity::find($id);
            $activity->title = $request->title;
            $activity->slug = Str::slug($request->title);
            $activity->content = $request->content;
            $activity->tanggal = $request->tanggal;
            $activity->division_id = $request->divisionId ? $request->divisionId : null;

            $thumbnail = $request->file('thumbnail');
            if ($thumbnail) {
                $filename = $this->resizeAndSave($thumbnail, 1920, 1080, $activity->thumbnail_url);
                if ($filename) {
                    $activity->thumbnail_url = $filename;
                }
            }

            $activity->save();

            $photos = $request->file('photos');
            if ($photos) {
                $activity->photos()->delete();
                foreach ($photos as $photo) {
                    $photoName = $this->saveFile($photo);
                    $activity->photos()->create(['photo_url' => $photoName]);
                }
            }

            $this->logAction('Mengedit kegiatan "'.$request->title.'"');
            
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
            $title = $activity->title;

            $this->deleteFile($activity->thumbnail_url);
            $activity->delete();

            $this->logAction('Menghapus kegiatan "'.$title.'"');

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
