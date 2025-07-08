<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Support\Facades\Auth;

class ChatifyAuthenticate
{
    public function handle($request, Closure $next)
    {
        // 1) If a web‑guard user is logged in, let them through
        if (Auth::guard('web')->check()) {
            //dd(Auth::user());
            return $next($request);
        }

        // 2) If an admin‑guard user is logged in, let them through
        if (Auth::guard('admin')->check() && Auth::guard('admin')->user()->type == 'superadmin') {
            $vendor = Auth::guard('admin')->user();
            //dd($vendor);
            // Find the proxy User row you created:
            $user = User::first();
            //dd($user);

            if (! $user) {
                // No linked user? deny access.
                return redirect()->route('login');
            }

            // “Log in” that User for this request on the web guard:
            Auth::guard('web')->setUser($user);
            // And tell the Auth facade to use 'web' by default:
            Auth::shouldUse('web');

            return $next($request);
        }

        // 3) Otherwise redirect to whichever login you prefer
        //    Here we send everyone to the user login:
        return redirect()->route('login');
    }
}
