<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure                  $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $locale = $request->route('locale') ?: Session::get('locale');

        if ($locale) {
            App::setLocale($locale);

            /**
             * We need to store the locale in the session because we don't want to pass it to each component we create.
             * Also because we fetch the locale from the route but the url for the Livewire API endpoint only
             * contains the component name.
             */
            Session::put('locale', $locale);
        } else {
            // Forget the locale so other examples will not be conflicted by it.
            Session::forget('locale');
        }

        return $next($request);
    }
}
