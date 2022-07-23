<?php

namespace App\Trait;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Image;
use Illuminate\Support\Str;

trait Upload
{
    private function resizeAndSave(UploadedFile $file, $width, $height, $oldFilename = null)
    {
        $filename = Str::random(40).'.'.$file->getClientOriginalExtension();

        $imageResize = Image::make($file->getRealPath());
        $imageResize->resize($width, $height);
        $imageResize->save(storage_path('app/public/uploads/'.$filename));

        if ($oldFilename) {
            $this->deleteFile($oldFilename);
        }

        return $filename;
    }

    private function saveFile(UploadedFile $file, $oldFilename = null)
    {
        $filename = Storage::disk('uploads')->put('/', $file);
        if ($filename) {
            if ($oldFilename) {
                $this->deleteFile($oldFilename);
            }
            return $filename;
        }
        return null;
    }

    private function deleteFile($filename)
    {
        return Storage::disk('uploads')->delete($filename);
    }
}