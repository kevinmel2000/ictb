<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class CheckPayment
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
        $user = Auth::user();
        
        if(!empty($user->payment)){
            return redirect('summary');
        }

        return $next($request);
    }
}
