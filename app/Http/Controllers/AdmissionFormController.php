<?php

namespace App\Http\Controllers;

use App\Models\Admission;
use Illuminate\Http\Request;

class AdmissionFormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admission.create');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admission.create');
    }

    /**
     * Store a newly created resource in storage.
     */
   public function store(Request $request)
    {
        // 1. Validation Logic
        $validated = $request->validate([
            'student_name'       => 'required|string|max:255',
            'dob'                => 'required|date',
            'sex'                => 'required|in:Male,Female,Other',
            'mother_name'        => 'required|string|max:255',
            'father_name'        => 'required|string|max:255',
            'residential_address'=> 'required|string',
            'category'          =>  'required|in:GEN,SC,ST,OBC',
            'res_mobile'         => 'required|digits:10',
            'admission_standard' => 'required|string',
            'photo'              => 'nullable|image|mimes:jpeg,png,jpg|max:2048', // 2MB Max
            'aadhar_no'          => 'nullable|digits:12',
        ], [
            // Custom Error Messages
            'res_mobile.digits' => 'Mobile number must be exactly 10 digits.',
            'aadhar_no.digits'  => 'Aadhar number must be 12 digits.',
        ]);

        $admission = new Admission();
        $admission->fill($request->except('photo'));
        
        // Explicitly set default status for backend tracking
        $admission->status = 'pending'; 
        
        if ($request->hasFile('photo')) {
            $admission->photo_path = $request->file('photo')->store('student_photos', 'public');
        }

        $admission->save();

        return redirect()->back()->with('success', 'Admission form submitted successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
