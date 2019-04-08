<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'name', 'email', 'body', 'post_id', 'confirm'
    ];

    public function posts()
    {
        return $this->belongsTo(Post::class);
    }
}
