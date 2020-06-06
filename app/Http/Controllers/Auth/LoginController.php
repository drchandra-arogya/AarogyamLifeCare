<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
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
//    protected $redirectTo = '/home';

    public  function  redirectTo()
    {
        if (Auth::user()->hasAnyRole('admin')) {
            return 'admin';
        } elseif (Auth::user()->hasAnyRole('doctor')) {
            return 'doctor';
        } elseif (Auth::user()->hasAnyRole('patient')) {
           return 'patient';
        } else {
            return 'home';
        }
    }

//    protected $redirectAfterLogout = '/login';
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

//    public function mobile_number()
//    {
//        return 'mobile_number';
//    }

    protected function credentials(Request $request)
    {
        if(is_numeric($request->get('email'))){
            return ['mobile_number'=>$request->get('email'),'password'=>$request->get('password')];
        }
        return $request->only($this->username(), 'password');
    }
}
