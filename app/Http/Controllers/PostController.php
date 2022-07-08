<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Photo;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $posts = Post::with('photos')->get();
        return view('post.index')->with('posts', $posts);
    }

    public function create() {
        return view('post.create');
    }

    public function store(Request $request) {
        $post = Post::create($request->only(['title']));
        $photos = explode(',',$request->get('photos'));
        foreach($photos as $photo){
            Photo::create([
                'photoable_id'=> $post->id,
                'photoable_type'=> 'App\Models\Post',
                'filename'=> $photo
            ]);
        }

        return redirect()->route('post.index');
    }
}
