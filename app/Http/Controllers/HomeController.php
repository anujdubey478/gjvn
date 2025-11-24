<?php

namespace App\Http\Controllers;

use App\Models\Topper;
use App\Models\News;
use App\Models\Event;
use App\Models\Gallery;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $toppers = Topper::where('is_active', true)
            ->orderBy('order')
            ->orderBy('class_name')
            ->get();

        $news = News::where('is_active', true)
            ->orderBy('order')
            ->orderBy('published_date', 'desc')
            ->take(10)
            ->get();

        $events = Event::where('is_active', true)
            ->orderBy('order')
            ->orderBy('event_date', 'asc')
            ->get();

        $galleries = Gallery::where('is_active', true)
            ->orderBy('order')
            ->orderBy('category')
            ->get();

        return view('home', compact('toppers', 'news', 'events', 'galleries'));
    }
}
