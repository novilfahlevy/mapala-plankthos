<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description'];

    public function activities()
    {
        return $this->hasMany(Activity::class, 'division_id', 'id');
    }
}
