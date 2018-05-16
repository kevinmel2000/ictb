<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckAdmin
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
        if(Auth::check() == false) return redirect('welcome');

        $id = Auth::user()->id;
        
        if($id != 1 || $id != 1){
            return redirect('welcome');
        }

        return $next($request);
    }
}
