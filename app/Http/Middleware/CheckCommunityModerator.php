<?php

namespace App\Http\Middleware;

use App\Models\CommunityModerator;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckCommunityModerator
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

        $community_moderator = CommunityModerator::where('user_id', $user->id)
            ->where('community_id', $community->id)
            ->first();

        if ($community_moderator) {
            return $next($request);
        }

        return redirect('/community')->with('message', 'You are not a community admin');
    }
}
