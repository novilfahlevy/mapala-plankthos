<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'title', 'slug', 'content', 'thumbnail_url'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function comments()
    {
        return $this->hasMany(ActivityComment::class, 'activity_id', 'id');
    }

    public function photos()
    {
        return $this->hasMany(ActivityPhoto::class, 'activity_id', 'id');
    }

    public function scopeSlug($query, $slug)
    {
        return $query->where('slug', 'LIKE', "%$slug%");
    }

    public function scopeRecents($query, $limit, $except = null)
    {
        $query
            // ->select(['id', 'slug', 'title', 'thumbnail_url', 'created_at'])
            ->orderByDesc('created_at')
            ->limit($limit);

        if ($except) $query->whereNot('id', $except)->whereNot('slug', $except);

        return $query;
    }
}
