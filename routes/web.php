<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\BackOfficeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\SkillController;
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

Route::get('/', [HomeController::class, "index"]);
Route::get('/backoffice', [BackOfficeController::class, "index"])->name('back');



Route::get('/backoffice/about/{id}/edit', [AboutController::class, "edit"])->name('edit_about');
Route::put('/backoffice/about/{id}/update', [AboutController::class, "update"])->name('update_about');


Route::get('/backoffice/contact/{id}/edit', [contactController::class, "edit"])->name('edit_contact');
Route::put('/backoffice/contact/{id}/update', [ContactController::class, "update"])->name('update_contact');


Route::get('/backoffice/portfolio/{id}/edit', [PortfolioController::class, "edit"])->name('edit_portfolio');
Route::put('/backoffice/portfolio/{id}/update', [PortfolioController::class, "update"])->name('update_portfolio');
Route::get('/portfolio/create', [PortfolioController::class, "create"])->name('create_portfolio');
Route::post('/portfolio/store', [PortfolioController::class, "store"])->name('store_portfolio');


Route::get('/backoffice/service/{id}/edit', [ServicesController::class, "edit"])->name('edit_service');
Route::put('/backoffice/service/{id}/update', [ServiceController::class, "update"])->name('update_service');

Route::get('/backoffice/skill/{id}/edit', [SkillController::class, "edit"])->name('edit_skill');
Route::put('/backoffice/skill/{id}/update', [SkillController::class, "update"])->name('update_skills');



