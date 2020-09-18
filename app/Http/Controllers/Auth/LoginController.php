<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use app\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    
     
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    /* public function redirectPath()
    {
        if (Auth::user()->hasRole('admin')) {
            return '/admin';
        }else{
            return '/home';
        }

        
    } */

    public function showLoginForm(Request $request)
{
    if ($request->has('redirect_to')) {
        session()->put('redirect_to', $request->input('redirect_to'));
    }

    return view('auth.login');
}

public function redirectTo()
{
    if (session()->has('redirect_to')) {
        return session()->pull('redirect_to');
    } else {
        if (Auth::user()->hasRole('admin')) {
            return '/admin';
        }
    }
   

    return $this->redirectTo;
}
}
