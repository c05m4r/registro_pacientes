<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PacienteController;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});

// Pacientes
Route::get('/pacientes', [PacienteController::class, 'index'])
    ->name('pacientes')
    ->middleware('auth');

Route::post('/pacientes', [PacienteController::class, 'store'])
    ->name('pacientes.store')
    ->middleware('auth');

Route::get('/pacientes/create', [PacienteController::class, 'create'])
    ->name('pacientes.create')
    ->middleware('auth');

Route::get('/pacientes/{id}', [PacienteController::class, 'show'])
    ->name('pacientes.show')
    ->middleware('auth');

Route::put('/pacientes/{id}', [PacienteController::class, 'update'])
    ->name('pacientes.update')
    ->middleware('auth');

Route::delete('/pacientes/{id}', [PacienteController::class, 'destroy'])
    ->name('pacientes.destroy')
    ->middleware('auth');

Route::get('/pacientes/{id}/edit', [PacienteController::class, 'edit'])
    ->name('pacientes.edit')
    ->middleware('auth');

// Route::resource('/pacientes', PacienteController::class);