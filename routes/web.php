<?php
use App\Http\Controllers\uts_controller_luthfia;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', [uts_controller_luthfia::class, 'panggil_welcome']);
Route::get('/', [uts_controller_luthfia::class, 'panggil_home'])->name("uts.home");
Route::get('/inisialisasi', [uts_controller_luthfia::class, 'panggil_inisialisasi'])->name("uts.inisialisasi");
Route::get('/idolaku', [uts_controller_luthfia::class, 'panggil_idolaku'])->name("uts.idolaku");
