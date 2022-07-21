<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Exception;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $settings = [];
        Setting::all()->each(function($setting) use (&$settings) {
            $settings[$setting['title']] = $setting['content'];
        });

        return view('backend.pages.setting', compact('settings'));
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
                case 'visi-misi' :
                    $this->saveSetting('visi', $request->visi);
                    $this->saveSetting('misi', $request->misi);
                    return redirect(route('pengaturan'))->with('alert',
                        ['status' => 'success', 'message' => 'Visi dan Misi berhasil diedit.']
                    );
                break;
                case 'media-sosial' :
                    $this->saveSetting('facebook', $request->facebook);
                    $this->saveSetting('instagram', $request->instagram);
                    $this->saveSetting('youtube', $request->youtube);
                    $this->saveSetting('twitter', $request->twitter);
                    return redirect(route('pengaturan'))->with('alert',
                        ['status' => 'success', 'message' => 'Media sosial berhasil diedit.']
                    );
                break;
                case 'kontak' :
                    $this->saveSetting('whatsapp', $request->whatsapp);
                    $this->saveSetting('email', $request->email);
                    $this->saveSetting('location', $request->location);
                    return redirect(route('pengaturan'))->with('alert',
                        ['status' => 'success', 'message' => 'Kontak berhasil diedit.']
                    );
                break;
            }
        } catch (Exception $error) {
            return redirect(route('pengaturan'))->with('alert',
                ['status' => 'danger', 'message' => $error->getMessage()]
            );
        }
    }

    private function saveSetting($title, $content)
    {
        return Setting::updateOrCreate(compact('title', 'content'));
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
