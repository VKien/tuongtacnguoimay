<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class AlreadyLoggedIn
{
    /**
     * Handle an incoming request.
     *
     * @param \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response) $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        if (Session::has('loginId') && Session::has('roleId')) {
            $currentUrl = $request->url();
            $employeeLoginUrl = url('employee/login');
            $doctorLoginUrl = url('doctor/login');
            $managerLoginUrl = url('manager/login');
            $registrationUrl = url('registration');
            if ($currentUrl == $registrationUrl) {
                return redirect()->back();
            }
            if ($currentUrl == $employeeLoginUrl && Session::get('roleId') == 1
                || $currentUrl == $managerLoginUrl && Session::get('roleId') == 3
                || $currentUrl == $doctorLoginUrl && Session::get('roleId') == 2
            ) {
                return redirect()->back();
            }
        }
        return $next($request);
    }
}
