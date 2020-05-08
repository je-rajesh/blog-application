<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    //
    public function index(User $user)
    {
        $posts = $user->posts;
        return view('profile.index', compact('user', 'posts'));
    }


    public function edit(User $user)
    {
        $this->authorize('update', $user->profile);
        return view('profile.edit', compact('user'));
    }

    public function update(User $user)
    {
        $this->authorize('update', $user->profile);
        $data = request()->validate(
            [
                'title' => 'required',
                'description' => 'required',
                'url' => ['required', 'url'],
                'image' => '',
            ]
        );
        
        if(request('image'))
        {

        }

        auth()->user()->profile->update($data);

        return redirect("/profile/{$user->id}");
    }
}
