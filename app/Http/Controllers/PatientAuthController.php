<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Patient;
use App\Role;
use  Auth;

class PatientAuthController extends Controller
{
    public function showPatientRegisterForm() {
        return view('patientauth.register');
    }
    public function patientRegister(Request $request) {
        $this->validation($request);
        $request['password'] = bcrypt($request->password);
        $user = User::create($request->all());
        Patient::create([
            'user_id' => $user->id
            ]);
        $role = Role::select('id')->where('name','patient')->first();
        $user->roles()->attach($role);
        return redirect('/patient-login')->with('status','You are Registered');
    }

    public function validation($request) {
        return $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users|max:225',
            'mobile_number' => 'required|max:10|unique:users',
            'password' => 'required|confirmed|max:225',
        ]);
    }

    public  function showPatientLoginForm() {
        return view('patientauth.login');
    }
    public  function patientLogin(Request $request) {
        $this->validate($request, [
            'mobile_number' => 'required|max:10',
            'password' => 'required|max:225',
        ]);
        if (Auth::attempt(['mobile_number'=>$request->mobile_number,'password'=>$request->password])) {
            return redirect('/patient')->with('status','You are Registered');
        } else {
            return 'Your login credential do not match !';
        }
        return redirect('/patient')->with('status','You are Registered');
    }
}
