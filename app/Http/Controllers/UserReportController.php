<?php

namespace App\Http\Controllers;

use App\Models\Community;
use App\Models\User;
use App\Models\UserReport;
use Illuminate\Http\Request;

class UserReportController extends Controller
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
    public function create(User $user)
    {
        return view('user.report', ['user' => $user]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, User $user)
    {
        $formFields = $request->validate([
            'report_description' => 'required|string|max:300',
        ]);

        $formFields['user_id'] = auth()->user()->id;

        UserReport::create([
            'report_description' => $formFields['report_description'],
            'reported_user_id' => $user->id,
            'user_id' => $formFields['user_id'],
        ]);

        return back()->with('success', 'Your report has been submitted');
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
    public function destroy(string $id)
    {
        //
    }
}
