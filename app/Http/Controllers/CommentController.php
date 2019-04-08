<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function create(Request $request)
    {
        $data = [
            'name' => $request['name'],
            'email' => $request['email'],
            'body' => $request['body'],
            'post_id' => $request['post_id'],
        ];

        Comment::create($data);
        return redirect()->back()->with('message', 'Your Comment Successfully Submitted');
    }
}
