<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function index(User $user) {

        return view('profiles.index',compact('user'));

    }
    public function edit(User $user)
    {
        $this->authorize('update', $user->profile);

        return view('profiles.edit', compact('user'));
    }

    public function update(User $user)
    {

        $this->authorize('update', $user->profile);

        $data = request()->validate([
           'title' => 'required',
            'description' => 'required',
            'url' => 'required',
            'image' => '',
        ]);


        $user->title=$request->get('title');
        $user->description=$request->get('description');
        $user->url=$request->get('url');
        $user->image=$request->get('image');
        $user->profile->save();

        return redirect("/profile/{ $user->id }");

    }
}
