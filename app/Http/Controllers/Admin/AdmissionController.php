<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdmissionController extends Controller
{
    /**
     * Display a listing of admissions with the stats.
     */
    public function index()
    {
        // Fetch all admissions ordered by newest
        $admissions = Admission::latest()->get();
        
        // The stats are calculated in the Blade view using this collection
        return view('admin.admissions.index', compact('admissions'));
    }

    /**
     * Display the full details of a specific student.
     */
    public function show(Admission $admission)
    {
        return view('admin.admissions.show', compact('admission'));
    }

    /**
     * Update status and provide better feedback.
     */
    public function updateStatus(Request $request, Admission $admission)
    {
        // 1. Validate that the status is one of our allowed options
        $request->validate([
            'status' => 'required|in:pending,approved,rejected'
        ]);

        // 2. Perform the update
        $admission->update([
            'status' => $request->status
        ]);

        // 3. Redirect to index with a clear success message including the student name
        return redirect()->route('admin.admissions.index')->with('success', 
            "Admission for **{$admission->student_name}** has been updated to " . strtoupper($request->status)
        );
    }

    /**
     * Optional: Delete Admission and clean up the stored photo
     */
    public function destroy(Admission $admission)
    {
        // Delete the student photo from storage if it exists
        if ($admission->photo_path) {
            Storage::disk('public')->delete($admission->photo_path);
        }

        $admission->delete();

        return redirect()->route('admin.admissions.index')->with('success', 'Admission record deleted successfully.');
    }
}