<?php
namespace App\Http\Middleware;

use Closure;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Inertia\Inertia;
use Inertia\Middleware;

class HandleInertiaRequests extends Middleware
{
    // Why $request does not have a typehint?
    function handle($request, Closure $next): Response
    {
        // Yes, this is the `manually` way.
        Inertia::share([

            // Synchronously
            // Don't override predefined properties,
            // like: app currentRouteName errorBags errors jetstream sessions
            'some_info' => [
                'name' => config('app.name')
            ],

            // Lazily
            'user' => (function($request){
                return $request->user() ? $request->user()->only('id', 'name', 'email') : null;
            }),
        ]);

        return parent::handle($request, $next);
    }

    // Middleware::share is not defined... meant be ResponseFactory::share??
    // You can not use codes on the current document.
    public function share(Request $request)
    {
    }
}
