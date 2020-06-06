<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        $adminRole = Role::where('name','admin')->first();
        $doctorRole = Role::where('name','doctor')->first();
        $patientRole = Role::where('name','patient')->first();

        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'mobile_number' => '9430825463',
            'password' => bcrypt('admin')
        ]);

        $doctor = User::create([
            'name' => 'Doctor',
            'email' => 'doctor@doctor.com',
            'mobile_number' => '7892115263',
            'password' => bcrypt('doctor')
        ]);

        $patient = User::create([
            'name' => 'Patient',
            'email' => 'patient@patient.com',
            'mobile_number' => '9006028986',
            'password' => bcrypt('patient')
        ]);

//        For Attaching Role to the User

        $admin->roles()->attach($adminRole);
        $doctor->roles()->attach($doctorRole);
        $patient->roles()->attach($patientRole);
    }

}
