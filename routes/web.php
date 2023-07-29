<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\NoteController;
use App\Http\Controllers\Admin\ProjetController;
use App\Http\Controllers\Admin\PayController;
use App\Http\Controllers\Admin\VilleController;
use App\Http\Controllers\Admin\BatterieController;
use App\Http\Controllers\Admin\PlaqueController;
use App\Http\Controllers\Admin\RegionController;
use App\Http\Controllers\Admin\DropdownController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function(){
    return view('home.index');
})->name('accueil');

Route::get('/about', function(){
    return view('home.about');
})->name('about');

Route::get('/contact', function(){
    return view('home.contact');
})->name('contact');

Route::get('/services', function(){
    return view('home.services');
})->name('services');

Route::get('/dashboard', function () {
    return view('admin.layouts.app_dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {

    Route::resources([
        'users' => UserController::class,
        'notes' => NoteController::class,
        'projets' => ProjetController::class,
        'pays' => PayController::class,
        'villes' => VilleController::class,
        'regions' => RegionController::class,
        'batteries' => BatterieController::class,
        'plaques' => PlaqueController::class,
    ]);

    Route::get('dropdown', [DropdownController::class, 'index']);

    Route::get('region/{id}', [DropdownController::class, 'region']);

    Route::get('ville/{id}', [DropdownController::class, 'ville']);

    Route::get('/profile/index', [ProfileController::class, 'index'])->name('profile.index');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile/{user}', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';