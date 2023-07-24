<?php

namespace App\Http\Middleware;

use App\Models\CommunityOwner;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckCommunityOwner
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = Auth::user();
        $community = $request->route('community');

        $community_admin = CommunityOwner::where('user_id', $user->id)
            ->where('community_id', $community->id)
            ->first();

        if ($community_admin) {
            return $next($request);
        }

        return redirect('/community')->with('message', 'You are not a community owner');
    }
}
