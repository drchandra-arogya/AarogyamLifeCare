<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use  Auth;
class CustomAuthController extends Controller
{
    public  function showRegisterForm() {
        return view('custom.register');
    }
    public  function register(Request $request) {
        $this->validation($request);
        $request['password'] = bcrypt($request->password);
        $user = User::create($request->all());
        $role = Role::select('id')->where('name','doctor')->first();
        $user->roles()->attach($role);
        return redirect('/custom-login-doctor')->with('status','You are Registered');
    }

    public  function showLoginForm() {
        return view('custom.login');
    }
    public  function login(Request $request) {
        $this->validate($request, [
            'mobile_number' => 'required|max:10',
            'password' => 'required|max:225',
        ]);
        if (Auth::attempt(['mobile_number'=>$request->mobile_number,'password'=>$request->password])) {
            return redirect('/doctor')->with('status','You are Registered');
        } else {
            return 'Your login credential do not match !';
        }
        return redirect('/doctor')->with('status','You are Registered');
    }


    public function validation($request) {
        return $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users|max:225',
            'mobile_number' => 'required|max:10|unique:users',
            'password' => 'required|confirmed|max:225',
        ]);
    }
}
