<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

class MobileMiddleware
{
    public function handle($request, Closure $next): Response
    {
        if (!Auth::user()) {
            return redirect('/user');
        }

        $user = User::where('id', Auth::user()->id)->first();

        if ($user) {
            if ($user->mobile_verified == 1) {
                return redirect('/');
            }
        }

        return $next($request);
    }
}
