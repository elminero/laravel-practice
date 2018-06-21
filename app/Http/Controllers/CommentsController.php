<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

use App\Comment;


class CommentsController extends Controller
{

    public function store(Post $post)
    {
        $comment = new Comment(request(['body']));
        $comment->post_id = $post->id;
        auth()->user()->publishComment($comment);

        return back();
    }

}
