<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return view('post.index', [
            'posts' => $posts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'title' => 'required|string|max:100',
            'body' => 'required|string|max:10000',
        ]);

        $formFields['user_id'] = auth()->id();

        Post::create($formFields);

        return redirect('/')->with('message', 'Post created succesfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::findOrFail($id);

        return view('post.show', [
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('post.edit', [
            'post' => $post
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {

        $formFields = $request->validate([
            'title' => 'required|string|max:100',
            'body' => 'required|string|max:10000',
        ]);

        $post->update($formFields);

        return redirect('/post/'.$post->id)->with('message', 'Post updated succesfully');
    }

    public function delete(Post $post)
    {
        return view('post.delete', [
            'post' => $post
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post){
        $post->delete();
        return redirect('/')->with('message', 'Post deleted succesfully');
    }
}
