<?php

namespace App\Http\Controllers;

use App\User;
use App\Post;
use Illuminate\Http\Request;


class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $user = auth()->user();
        return view('post.index', compact('user'));
    }
    public function show(Post $post)
    {
        $user = $post->user;
        return view('post.show', compact('post', 'user'));
    }
    public function create(Post $post)
    {
        $user = auth()->user();
        return view('post.create', compact('user'));
    }
    public function store()
    {
        $data = request()->validate([
            'title' => 'required',
            'walltext' => 'required'
        ]);

        auth()->user()->posts()->create($data);
        $user = auth()->user();

        return redirect("/profile/" . $user->id);
    }

    public function edit(Post $post)
    {
        if ($post->user_id == auth()->user()->id) {
            return view('post.edit', compact('post'));
        }
    }


    public function update(Post $post)
    {
        if ($post->user_id = auth()->user()->id) {
            $data = request()->validate(
                [
                    'title' => 'required',
                    'walltext' => 'required',
                ]
            );
            $post->update($data);
        }
    }
}
