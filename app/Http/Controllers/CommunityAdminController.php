<?php

namespace App\Http\Controllers;

use App\Models\Community;
use App\Models\CommunityAdmin;
use App\Models\User;
use Illuminate\Http\Request;

class CommunityAdminController extends Controller
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
    public function store(Request $request, Community $community)
    {
        $formFields = $request->validate([
            'username' => 'required|string|max:20',
        ]);

        $userId = User::where('username', $formFields['username'])
            ->first()
            ->id;

        CommunityAdmin::create([
            'user_id' => $userId,
            'community_id' => $community->id,
        ]);

        return back()->with('success', 'Community Administrator Added');
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
    public function destroy(Community $community, User $user)
    {
        $communityAdmin = CommunityAdmin::where('community_id', $community->id)
            ->where('user_id', $user->id)
            ->first();

        $communityAdmin->delete();
        return back()->with('message', 'community administrator removed');
    }
}
