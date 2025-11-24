<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Topper;
use App\Models\News;
use App\Models\Event;
use App\Models\Gallery;
use App\Models\Contact;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'toppers' => Topper::where('is_active', true)->count(),
            'news' => News::where('is_active', true)->count(),
            'events' => Event::where('is_active', true)->count(),
            'galleries' => Gallery::where('is_active', true)->count(),
            'contacts' => Contact::count(),
            'unread_contacts' => Contact::where('is_read', false)->count(),
        ];

        return view('admin.dashboard', compact('stats'));
    }
}
