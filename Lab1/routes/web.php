<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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
    return view('welcome');
});

Route::get('/pages', [PagesController::class, 'pageCheck'])->name('pages');
Route::get('/pagehome', [PagesController::class, 'pageHome'])->name('pagehome');
Route::get('/aboutus', [PagesController::class, 'pageAboutUs'])->name('aboutus');
Route::get('/contactus', [PagesController::class, 'pageContactUs'])->name('contactus');
Route::get('/ourteams', [PagesController::class, 'pageOurTeams'])->name('ourteams');
Route::get('/service', [PagesController::class, 'pageService'])->name('service');