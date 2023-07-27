<?php

namespace App\Http\Controllers;

use App\Models\Community;
use App\Models\CommunityAdmin;
use App\Models\CommunityModerator;
use App\Models\CommunityOwner;
use Illuminate\Http\Request;
use App\Models\PostReport;
use App\Models\Post;

class CommunityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $communities = Community::latest()->get();
        return view('community.index', [
            'communities' => $communities
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('community.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'community_name' => 'required|string|max:32',
        ]);


        $community = Community::create($formFields);
        CommunityModerator::create([
            'user_id' => auth()->user()->id,
            'community_id' => $community->id,
        ]);
        CommunityAdmin::create([
            'user_id' => auth()->user()->id,
            'community_id' => $community->id,
        ]);
        CommunityOwner::create([
            'user_id' => auth()->user()->id,
            'community_id' => $community->id,
        ]);

        return redirect('/')->with('message', 'Community created succesfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $community = Community::findOrFail($id);

        return view('community.show', [
            'community' => $community
        ]);
    }

    public function dashboard(Community $community)
    {
        $posts = Post::where('community_id', $community->id)->get();
        $postReports = [];
        foreach ($posts as $post) {
            $postReports[$post->id] = PostReport::where('post_id', $post->id)->with('post')->get();
        }
        return view('community.dashboard', [
            'community' => $community,
            'postReports' => $postReports
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Community $community)
    {
        return view('community.edit', [
            'community' => $community
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Community $community)
    {

        $formFields = $request->validate([
            'community_name' => 'required|string|max:30',
            'community_description' => 'required|string|max:300',
        ]);

        $community->update($formFields);

        return redirect('/community/'.$community->id)->with('message', 'Community updated succesfully');
    }




    /**
     * Remove the specified resource from storage.
     */

    public function delete(Community $community)
    {
        return view('community.delete', [
            'community' => $community
        ]);
    }

    public function destroy(Community $community)
    {
        $community->delete();
        return redirect('/')->with('message', 'community deleted succesfully');
    }

}
