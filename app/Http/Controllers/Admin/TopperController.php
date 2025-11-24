<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Topper;
use Illuminate\Http\Request;

class TopperController extends Controller
{
    public function index()
    {
        $toppers = Topper::orderBy('order')->orderBy('class_name')->get();
        return view('admin.toppers.index', compact('toppers'));
    }

    public function create()
    {
        return view('admin.toppers.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'class_name' => 'required|string|max:255',
            'first_rank_name' => 'nullable|string|max:255',
            'second_rank_name' => 'nullable|string|max:255',
            'third_rank_name' => 'nullable|string|max:255',
            'is_active' => 'boolean',
            'order' => 'integer',
        ]);

        $validated['is_active'] = $request->has('is_active');
        Topper::create($validated);

        return redirect()->route('admin.toppers.index')
            ->with('success', 'Topper created successfully.');
    }

    public function edit(Topper $topper)
    {
        return view('admin.toppers.edit', compact('topper'));
    }

    public function update(Request $request, Topper $topper)
    {
        $validated = $request->validate([
            'class_name' => 'required|string|max:255',
            'first_rank_name' => 'nullable|string|max:255',
            'second_rank_name' => 'nullable|string|max:255',
            'third_rank_name' => 'nullable|string|max:255',
            'is_active' => 'boolean',
            'order' => 'integer',
        ]);

        $validated['is_active'] = $request->has('is_active');
        $topper->update($validated);

        return redirect()->route('admin.toppers.index')
            ->with('success', 'Topper updated successfully.');
    }

    public function destroy(Topper $topper)
    {
        $topper->delete();

        return redirect()->route('admin.toppers.index')
            ->with('success', 'Topper deleted successfully.');
    }
}
