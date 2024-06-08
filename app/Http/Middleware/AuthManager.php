<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class AuthManager
{
    /**
     * Handle an incoming request.
     *
     * @param \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response) $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $currentUrl = $request->url();

        $managersPosition = strpos($currentUrl, "/managers");

        if ($managersPosition !== false) {
            if (!Session::has('loginId') || !Session::has('roleId') || Session::get('roleId') != 3) {
                $this->deleteSessions();
                return redirect('manager/login')->with('fail', 'You do not have access to this page.');
            }
        }

        return $next($request);
    }

    private function deleteSessions()
    {
        if (Session::has("loginId")) {
            Session::pull("loginId");
        }

        if (Session::has("roleId")) {
            Session::pull("roleId");
        }
    }
}
