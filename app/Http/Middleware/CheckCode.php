<?php

namespace App\Http\Middleware;

use App\Models\Plant;
use Closure;
use Illuminate\Http\Request;

class CheckCode
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $plant = Plant::where('code', $request->code)->first();
        if (isset($plant)) {
            return $next($request);
        }

        return response()->json('Your code is invalid. Please try again');
    }
}
