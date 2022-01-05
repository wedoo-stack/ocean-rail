<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PagesController;

use App\Http\Controllers\NewsletterController;

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


//Index page
Route::get('/', [PagesController::class, 'index']);

//About us page
Route::get('/about', [PagesController::class, 'about']);

//Blog page
Route::get('/blog', [PagesController::class, 'blog']);

//Services page
Route::get('/services', [PagesController::class, 'services']);

//Service page
Route::get('/service', [PagesController::class, 'service']);

//Contact page
Route::get('/contact', [PagesController::class, 'contact']);

//Article page
Route::get('/article', [PagesController::class, 'article']);

//Submit Newsletter
Route::post('/submit-newsletter', [NewsletterController::class, 'index']);

//API Newsletter
Route::get('/mailchimp-get-users', [NewsletterController::class, 'mailchimp_get_users']);


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
