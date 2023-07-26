<?php

namespace App\Http\Controllers;

use App\Models\Community;
use App\Models\Post;
use App\Models\PostReport;
use Illuminate\Http\Request;

class PostReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Post $post)
    {
        return view('user.report', ['post' => $post]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Post $post)
    {
        $formFields = $request->validate([
            'report_description' => 'required|string|max:300',
        ]);

        $formFields['user_id'] = auth()->user()->id;

        PostReport::create([
            'report_description' => $formFields['report_description'],
            'post_id' => $post->id,
            'user_id' => $formFields['user_id'],
        ]);

        return redirect(route('post.show', $post->id))->with('success', 'Your report has been submitted');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
