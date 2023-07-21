<?php

namespace App\Http\Controllers;

use App\Models\Community;
use Illuminate\Http\Request;

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


        Community::create($formFields);

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
