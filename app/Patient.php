<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [
        'id','name','alternate_number','mobile_numbe','email','date_of_birth','gender','diseases','education','occupation',
        'notes','address','city','state','country','pincode','marital_status','image','user_id','modified_by','created_at','updated_at'
    ];

    public function users() {
        return $this->belongsToMany('App\User');
    }
}
