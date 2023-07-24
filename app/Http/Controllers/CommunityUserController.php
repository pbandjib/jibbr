<?php

namespace App\Http\Controllers;

use App\Models\Community;
use App\Models\CommunityUser;
use Illuminate\Http\Request;

class CommunityUserController extends Controller
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Community $community)
    {
        CommunityUser::create([
            'user_id' => auth()->user()->id,
            'community_id' => $community->id,
        ]);

        return back()->with('success', 'Joined this community');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
    public function destroy(Community $community)
    {
        $communityUser = CommunityUser::where('community_id', $community->id)
            ->where('user_id', auth()->user()->id)
            ->first();

        $communityUser->delete();
        return back()->with('message', 'You have left this community');
    }
}
