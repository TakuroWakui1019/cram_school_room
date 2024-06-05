<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        Route::get('/', [PostController::class, 'index'])->name('index')->middleware('auth');
        if (! $request->expectsJson()) {
            return route('login');
        }
    }
}
