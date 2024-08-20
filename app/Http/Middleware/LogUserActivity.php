<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class LogUserActivity
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // Log user activity only if the user is authenticated
        if (Auth::check()) {
            $user = Auth::user();
            $action = $request->method() . ' ' . $request->path();
            $data = [
                'user_id' => $user->id,
                'user_email' => $user->email,
                'action' => $action,
                'ip_address' => $request->ip(),
                'timestamp' => now(),
            ];

            Log::info('User Action: ', $data);
        }

        return $next($request);
    }
}
