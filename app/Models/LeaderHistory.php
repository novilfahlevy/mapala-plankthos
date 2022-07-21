<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeaderHistory extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'nim', 'from_year', 'to_year', 'photo_url'];
}
