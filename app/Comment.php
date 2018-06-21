<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['body'];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    public function user()  // to get name $comment->user->name
    {
        return $this->belongsTo(User::class);
    }


}
