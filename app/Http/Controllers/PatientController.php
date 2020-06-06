<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

// use Auth;
use App\User;
use App\Patient;

class PatientController extends Controller
{

    public function __construct() {
        $this->middleware('auth');
    }

    public function patientProfile() {
          $id = Auth::id();

          $patient_profile = Auth::user()
          ->select('users.id','patients.image','users.name','users.mobile_number','users.email','patients.date_of_birth',
                        'patients.diseases','patients.education','patients.occupation','patients.gender','patients.notes','patients.address') 
          ->join('patients','patients.user_id','=','users.id')
          ->where('user_id', $id)
          ->get();
        return view('patient',compact('patient_profile'));
    }
    
    public function patientProfileEdit($id) {
         
        $patient = User::findOrFail($id)
        ->select('users.name','patients.image','patients.occupation','users.mobile_number',
        'users.email','patients.date_of_birth','patients.diseases','patients.education','patients.address',
        'patients.gender','patients.notes')
        ->join('patients','patients.user_id','=','users.id')
        ->where('user_id', $id)
        ->first();
       
        return view('patient_profile_edit',compact('patient'));
    } 

    public function patientProfileUpdate(Request $request) {

       
    
        $data = $request->all();

        $patient = array();
        $patient['name'] = $data['name'];
        $patient['email'] = $data['email'];
        $patient['mobile_number'] = $data['mobile_number'];
        $patient['date_of_birth'] = $data['date_of_birth'];
        $patient['diseases'] = $data['diseases'];
        $patient['education'] = $data['education'];
        $patient['occupation'] = $data['occupation'];
        $patient['address'] = $data['address'];
        $patient['gender'] = $data['gender'];
        $patient['notes'] = $data['notes'];
       

        if(isset($data['image'])) {
            $patient['image'] = FileUploadController::fileUpload($data['image'],'uploads/patients');
            unset($data['image']);
        }
        User::where('id',Auth::user()->id)->update([
            'name' => $data['name'],
            'email' => $data['email'],
            'mobile_number' => $data['mobile_number'],
           
        ]);
        Patient::where('user_id',Auth::user()->id)->update($patient);

        return redirect('/patient');

    }
}
