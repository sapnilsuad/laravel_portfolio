<?php
use Illuminate\Support\Facades\Route; 

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
  
Route::get('/', 'App\Http\Controllers\PortfolioController@home');   
Route::get('/work-experience', 'App\Http\Controllers\PortfolioController@workExperience'); 
Route::get('/projects', 'App\Http\Controllers\PortfolioController@projects');
Route::get('/projects/{id}', 'App\Http\Controllers\PortfolioController@projectDetails');

