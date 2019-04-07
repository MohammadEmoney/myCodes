<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
      'title', 'slug', 'image', 'details', 'user_id', 'short_desc'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
