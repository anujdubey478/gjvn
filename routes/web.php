<?php

use App\Http\Controllers\Admin\AdmissionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\TopperController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\ContactController as AdminContactController;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\AdmissionFormController;

// Public Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap');

Route::get('/admission-form', [AdmissionFormController::class, 'index'])
     ->name('admission.form.store');
Route::post('/admission-form', [AdmissionFormController::class, 'store'])
     ->name('admission.store');

// Admin Authentication Routes
//add git hub
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    
    // Protected Admin Routes
    Route::middleware(['admin'])->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        
        // Resource Routes
        Route::resource('toppers', TopperController::class);
        Route::resource('news', NewsController::class);
        Route::resource('events', EventController::class);
        Route::resource('galleries', GalleryController::class);
        Route::resource('contacts', AdminContactController::class)->only(['index', 'show', 'destroy']);
        Route::post('contacts/{contact}/mark-read', [AdminContactController::class, 'markAsRead'])->name('contacts.mark-read');
        Route::post('contacts/{contact}/mark-unread', [AdminContactController::class, 'markAsUnread'])->name('contacts.mark-unread');

        Route::get('/admissions', [AdmissionController::class, 'index'])->name('admissions.index');
        Route::get('/admissions/{admission}', [AdmissionController::class, 'show'])->name('admissions.show');
        Route::patch('/admissions/{admission}/status', [AdmissionController::class, 'updateStatus'])->name('admissions.updateStatus');
    });
});

