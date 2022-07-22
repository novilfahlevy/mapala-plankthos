<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Trait\Setting as TraitSetting;
use Exception;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    use TraitSetting;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setting = $this->getAllSettings();
        return view('backend.pages.setting', compact('setting'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
            switch ($request->title) {
                case 'angkatan-anggota' :
                    $request->validate([
                        'angkatan' => ['required'],
                        'anggota' => ['required'],
                    ]);

                    $this->saveSetting('angkatan', $request->angkatan);
                    $this->saveSetting('anggota', $request->anggota);

                    return redirect()->route('pengaturan.index')->with('alert', [
                        'status' => 200,
                        'message' => 'Angkatan dan anggota berhasil diedit.'
                    ]);
                break;

                case 'visi-misi' :
                    $request->validate([
                        'visi' => ['required'],
                        'misi' => ['required'],
                    ]);

                    $this->saveSetting('visi', $request->visi);
                    $this->saveSetting('misi', $request->misi);

                    return redirect()->route('pengaturan.index')->with('alert', [
                        'status' => 200,
                        'message' => 'Visi dan Misi berhasil diedit.'
                    ]);
                break;

                case 'media-sosial' :
                    $this->saveSetting('facebook', $request->facebook);
                    $this->saveSetting('instagram', $request->instagram);
                    $this->saveSetting('youtube', $request->youtube);
                    $this->saveSetting('twitter', $request->twitter);

                    return redirect()->route('pengaturan.index')->with('alert', [
                        'status' => 200,
                        'message' => 'Media sosial berhasil diedit.'
                    ]);
                break;
                
                case 'kontak' :
                    $request->validate([
                        'whatsapp' => ['required'],
                        'email' => ['required'],
                        'location' => ['required']
                    ]);

                    $this->saveSetting('whatsapp', $request->whatsapp);
                    $this->saveSetting('email', $request->email);
                    $this->saveSetting('location', $request->location);

                    return redirect()->route('pengaturan.index')->with('alert', [
                        'status' => 200,
                        'message' => 'Kontak berhasil diedit.'
                    ]);
                break;
            }
        } catch (Exception $error) {
            return redirect()->route('pengaturan.index')->with('alert', [
                'status' => $error->getCode(),
                'message' => $error->getMessage()
            ]);
        }
    }

    private function saveSetting($title, $content)
    {
        $oldSetting = Setting::where('title', $title);
        if ($oldSetting->count()) {
            return $oldSetting->update(compact('content'));
        }
        return Setting::create(compact('title', 'content'));
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
