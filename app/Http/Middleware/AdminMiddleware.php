<?php

namespace App\Http\Middleware;

use Closure;
use App\User;

class AdminMiddleware {
  /**
   * Handle an incoming request.
   *
   * @param  \Illuminate\Http\Request $request
   * @param  \Closure $next
   * @return mixed
   */
  public function handle($request, Closure $next) {
    if (!auth()->user()->admin) {
      return redirect(route('welcome'));
    }

    return $next($request);
  }
}
