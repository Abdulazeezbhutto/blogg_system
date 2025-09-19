<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Auth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if user is logged in
        if (!$request->session()->has("LoggedUser")) {
            return redirect("login")->with("fail", "You must be logged in");
        }

        // Get role
        $role = $request->session()->get("LoggedUser")->role ?? null;

        // ✅ Admin routes
        if ($role === "admin") {
            $adminRoutes = [
                'admin*',
                'blogg*',
                'create*',
                'edit*',
                'profile*',
                'listcategory*',
                'createcategory*',
                'storecategory*',
                'editcategory/{id}',
                'updatecategory*',
                'deletecategory*',
                'storeblog*',
                'listusers*',
                'edituser*',
                'adduser*',
                'listcomments*',
                'updateprofile*', 
            ];

            if ($this->matchRoutes($request, $adminRoutes)) {
                return $next($request);
            }

            return redirect('/')->with('fail', 'Admins are not allowed to access this page.');
        }

        // ✅ User routes
        if ($role === "user") {
            $userRoutes = [
                'userdashboard*',
                'userprofile*',
            ];

            if ($this->matchRoutes($request, $userRoutes)) {
                return $next($request);
            }

            return redirect('/')->with('fail', 'Users are not allowed to access this page.');
        }

        // ✅ Agar role invalid ya missing ho
        return redirect("/")->with("fail", "Invalid role or permission denied.");
    }

    private function matchRoutes(Request $request, array $routes): bool
    {
        foreach ($routes as $route) {
            if ($request->is($route)) {
                return true;
            }
        }
        return false;
    }
}
