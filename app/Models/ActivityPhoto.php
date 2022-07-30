<?php

namespace App\Models;

use App\Trait\Upload;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivityPhoto extends Model
{
    use HasFactory, Upload;

    protected $fillable = ['activity_id', 'photo_url'];

    protected static function boot()
    {
        parent::boot();
        static::deleting(function(self $photo) {
            $this->deleteFile($photo->photo_url);
        });
    }
}
