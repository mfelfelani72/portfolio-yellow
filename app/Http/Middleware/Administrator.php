<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Config;

class Administrator
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        // for lock admin dashboard route from regular users and guests

        $patern = '/^\/admin/m';
        $allowRoutesFrom = ['login', 'register'];
        $LangsList = array_merge(Config::get('config-app.rtl-langs'),Config::get('config-app.ltr-langs'));
   
        $pathInfo = $request->getPathInfo();

        $routeToAdmin = preg_match_all(
            $patern,
            $pathInfo,
            $matches,
            PREG_SET_ORDER,
            0
        );

        $routeFrom = app('router')->getRoutes()->match(app('request')->create(url()->previous()))->getName();

        if (in_array(str_replace('/', '', $pathInfo), $LangsList)){
            return $next($request);
        }
        
        elseif (in_array($routeFrom, $allowRoutesFrom) && auth()->user()->role !== 'supervisor') {
            return redirect()->route('front');
        } else if ($routeToAdmin) {
            if (!auth()->user() || auth()->user()->role !== 'supervisor') {
            
                abort('404', "NOT FOUND");
            }
        }

        // for lock admin dashboard route from regular users and guests

        return $next($request);
    }
}
