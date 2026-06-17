<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PartnershipsController;
use App\Http\Controllers\DonateController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SitemapController;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LogoutController;

use App\Http\Controllers\Admin\Auth\LoginController as AdminLoginController;
use App\Http\Controllers\Admin\Auth\LogoutController as AdminLogoutController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminProfileController;  // 👈 ADD THIS
use App\Http\Controllers\Admin\UpdateController;
use App\Http\Controllers\Admin\PartnershipController;
use App\Http\Controllers\Admin\WishlistController;
use App\Http\Controllers\Admin\InquiryController;
use App\Http\Controllers\Admin\DonationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// ============================================
// PUBLIC ROUTES
// ============================================

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/partnerships', [PartnershipsController::class, 'index'])->name('partnerships');
Route::get('/donate', [DonateController::class, 'index'])->name('donate');
Route::get('/contact', [ContactController::class, 'showForm'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit')->middleware('auth');
Route::get('/profile', [ProfileController::class, 'index'])->name('profile')->middleware('auth');
Route::get('/sitemap.xml', [SitemapController::class, 'index']);

// ============================================
// USER AUTHENTICATION
// ============================================

Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [RegisterController::class, 'register']);
});

Route::post('/logout', [LogoutController::class, 'logout'])->name('logout')->middleware('auth');

// ============================================
// ADMIN ROUTES
// ============================================

Route::prefix('admin')->name('admin.')->group(function () {
    
    // Admin Login (guest only)
    Route::middleware('guest:admin')->group(function () {
        Route::get('/login', [AdminLoginController::class, 'showLoginForm'])->name('login');
        Route::post('/login', [AdminLoginController::class, 'login']);
    });
    
    // Admin Logout
    Route::post('/logout', [AdminLogoutController::class, 'logout'])->name('logout');
    
    // Admin Dashboard (authenticated only)
    Route::middleware('admin.auth')->group(function () {
        Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
        
        // 👇 ADD THESE ADMIN PROFILE ROUTES
        Route::get('/profile', [AdminProfileController::class, 'index'])->name('profile');
        Route::put('/profile', [AdminProfileController::class, 'update'])->name('profile.update');
        
        // CRUD Resources
        Route::resource('updates', UpdateController::class);
        Route::resource('partnerships', PartnershipController::class);
        Route::resource('wishlist', WishlistController::class);
        
        // Inquiries
        Route::get('/inquiries', [InquiryController::class, 'index'])->name('inquiries.index');
        Route::get('/inquiries/{inquiry}', [InquiryController::class, 'show'])->name('inquiries.show');
        Route::put('/inquiries/{inquiry}', [InquiryController::class, 'update'])->name('inquiries.update');
        Route::delete('/inquiries/{inquiry}', [InquiryController::class, 'destroy'])->name('inquiries.destroy');
        
        // Donation Channels
        Route::get('/donations/edit', [DonationController::class, 'edit'])->name('donations.edit');
        Route::put('/donations', [DonationController::class, 'update'])->name('donations.update');
    });
});