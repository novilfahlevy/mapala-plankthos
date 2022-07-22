<?php

namespace App\Trait;

use Illuminate\Support\Facades\Storage;

trait Upload
{
    private function saveFile($file, $oldFilename = null)
    {
        $filename = Storage::disk('uploads')->put('/', $file);
        if ($filename) {
            if ($oldFilename) {
                Storage::disk('uploads')->delete($oldFilename);
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