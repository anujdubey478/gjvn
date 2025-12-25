<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admission extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'student_name',
        'dob',
        'sex',
        'nationality',
        'birth_place',
        'photo_path',
        'mother_name',
        'mother_occupation',
        'mother_education',
        'father_name',
        'father_occupation',
        'father_education',
        'residential_address',
        'res_mobile',
        'email',
        'office_address',
        'off_mobile',
        'parents_income',
        'category',
        'aadhar_no',
        'last_school',
        'admission_standard',
        'sibling_details',
        'status',
    ];

    /**
     * Default values for model attributes.
     */
    protected $attributes = [
        'status' => 'pending',
        'nationality' => 'Indian',
    ];
}