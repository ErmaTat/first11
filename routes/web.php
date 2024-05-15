<?php

use App\Http\Controllers\{
    ProfileController,
    TournamentController,
    ClubController,
    DashboardController,
    SiteController,
    LogoController
};
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/dashboard',[DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/Competition/{id}',[SiteController::class, 'competition'])->name('competition');
Route::get('/team/{id}',[SiteController::class, 'team'])->name('team');
Route::get('/blogs',[SiteController::class, 'blogs'])->name('blogs');
Route::get('/about',[SiteController::class, 'about'])->name('about');
Route::get('/contact',[SiteController::class, 'contact'])->name('contact');
Route::get('/players',[SiteController::class, 'players'])->name('players');
Route::get('/teams',[SiteController::class, 'teams'])->name('teams');





Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::post('/register_team', [TournamentController::class, 'register'])->name('tournament.register');

    Route::resources([
        'tournaments'=> TournamentController::class,
        'clubs'=> ClubController::class,
        'logo'=> LogoController::class,
    ]);
});

require __DIR__.'/auth.php';
