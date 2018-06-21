<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

class PostsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index()
    {
        $posts =  Post::latest();
        $posts->year(request('year'));
        $posts->month(request('month'));
        $posts = $posts->get();
/*
SELECT month(created_at) as month, year(created_at) as year, COUNT(id) as 'count'
FROM posts
GROUP BY year(created_at) desc, month(created_at) desc;
*/


/*
        $archives = DB::select('SELECT month(created_at) as month, year(created_at) as year, COUNT(id) as count 
                                      FROM posts GROUP BY year(created_at) desc, month(created_at) desc');
*/


     $archives = Post::archives();




        return view('posts.index', compact('posts', 'archives'));
    }


    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }


    public function create()
    {
        return view('posts.create');
    }


    public function store()
    {
        $this->validate(request(), [
            'title'=>'required|min:3',
            'body'=>'required'
        ]);


        auth()->user()->publish(

            new Post(request(['title', 'body']))

        );

        /*
         *
        Post::create([
            'title' => request('title'),
            'body' => request('body'),
            //'user_id' => auth()->user()->id,
            'user_id' => auth()->id()
        ]);

        */

        return redirect('/');
    }
}
