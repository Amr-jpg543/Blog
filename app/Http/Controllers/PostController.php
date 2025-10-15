<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{


    public function index()
    {
        $posts = Post::paginate(50);
        return view('posts.All_posts', compact('posts'));
    }


    public function show($id)
    {

        $post = Post::findOrFail($id);
        return view('posts.single_post', compact('post'));

    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(PostRequest $request)
    {
        // رفع الصورة وتخزينها
        $path = $request->file('photo')->store('posts', 'public');

        // إنشاء البوست في قاعدة البيانات
        $post = Post::create([
            'title' => $request->title,
            'description' => $request->description,
            'photo' => $path,
            'user_id' => 1,
        ]);

        return redirect()->route('posts.index')->with('success', 'Post created successfully!');
    }


}
