<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Creating a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * The post-login redirect path.
     *
     * @return string
     */
    protected function redirectTo()
    {
        $user = Auth::user();

        // Check user role and redirect accordingly
        if ($user->role === 'admin') {
            return '/airlines'; // Path to the admin dashboard
        }

        return '/dashboard'; // Path to the standard user dashboard
    }
}