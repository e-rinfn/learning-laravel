<?php

namespace App\Http\Middleware;


use auth;
use Closure;
use Illuminate\Http\Request;

class OnlyAdmin
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
        // disini kita ngasih tau kepada middleware jika login bukan sebagai admin maka akan ke halaman books
        if (auth()->user()->role_id != 1) {
            return redirect('books');
        }
        // jika login sebagai admin maka akan langsung ke halaman dashboard admin
        return $next($request);
    }
}