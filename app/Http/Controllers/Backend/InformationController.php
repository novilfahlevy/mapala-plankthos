<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Information;
use App\Trait\Information as TraitInformation;
use App\Trait\Upload;
use App\Trait\UserAction;
use Exception;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    use TraitInformation, Upload, UserAction;
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $information = $this->getAllInformations();
        return view('backend.pages.information', compact('information'));
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
                case 'organisasi' :
                    $this->saveInformation('angkatan', $request->angkatan);
                    $this->saveInformation('anggota', $request->anggota);
                    $this->saveInformation('tentang', $request->tentang);
                    
                    if ($request->file('struktur')) {
                        $request->validate(['struktur' => ['file', 'max:2000']]);

                        $structureFile = $request->file('struktur');
                        $oldFilename = Information::select('content')->whereTitle('struktur')->first();
                        $filename = $this->resizeAndSave($structureFile, 1800, 2400, $oldFilename ? $oldFilename->content : null);
                        $this->saveInformation('struktur', $filename);
                    }

                    $this->logAction('Mengedit informasi tentang organisasi.');
                    
                    return redirect()->route('informasi.index')->with('alert', [
                        'status' => 200,
                        'message' => 'Organisasi berhasil diedit.'
                    ]);
                break;

                case 'visi-misi' :
                    $this->saveInformation('visi', $request->visi);
                    $this->saveInformation('misi', $request->misi);

                    $this->logAction('Mengedit informasi tentang visi dan misi.');
                    
                    return redirect()->route('informasi.index')->with('alert', [
                        'status' => 200,
                        'message' => 'Visi dan Misi berhasil diedit.'
                    ]);
                break;

                case 'media-sosial' :
                    $this->saveInformation('facebook', $request->facebook);
                    $this->saveInformation('instagram', $request->instagram);
                    $this->saveInformation('youtube', $request->youtube);
                    $this->saveInformation('twitter', $request->twitter);

                    $this->logAction('Mengedit informasi tentang media sosial.');
                    
                    return redirect()->route('informasi.index')->with('alert', [
                        'status' => 200,
                        'message' => 'Media sosial berhasil diedit.'
                    ]);
                break;
                
                case 'kontak' :
                    $this->saveInformation('whatsapp', $request->whatsapp);
                    $this->saveInformation('email', $request->email);
                    $this->saveInformation('location', $request->location);
                    $this->saveInformation('bumo', $request->bumo);

                    $this->logAction('Mengedit informasi tentang kontak.');

                    return redirect()->route('informasi.index')->with('alert', [
                        'status' => 200,
                        'message' => 'Kontak berhasil diedit.'
                    ]);
                break;
            }
        } catch (Exception $error) {
            return redirect()->route('informasi.index')->with('alert', [
                'status' => $error->getCode(),
                'message' => $error->getMessage()
            ]);
        }
    }

    private function saveInformation($title, $content)
    {
        $oldInformation = Information::where('title', $title);
        if ($oldInformation->count()) {
            return $oldInformation->update(compact('content'));
        }
        return Information::create(compact('title', 'content'));
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
