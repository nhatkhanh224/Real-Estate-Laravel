<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\HomePageController;


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


Route::get('/home', function () {
    return view('home');
});
Route::prefix('category')->group(function () {
    Route::get('/', [CategoryController::class, 'index'])->name('categories.index');
    Route::get('/create', [CategoryController::class, 'create'])->name('categories.create'); 
    Route::post('/store', [CategoryController::class, 'store'])->name('categories.store'); 
    Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('categories.edit'); 
    Route::post('/update/{id}', [CategoryController::class, 'update'])->name('categories.update');  
    Route::get('/delete/{id}', [CategoryController::class, 'delete'])->name('categories.delete');      
});
Route::prefix('property')->group(function () {
    Route::get('/', [PropertyController::class, 'index'])->name('properties.index');
    Route::get('/detail/{id}', [PropertyController::class, 'detail'])->name('properties.detail'); 
    Route::get('/edit/{id}', [PropertyController::class, 'edit'])->name('properties.edit'); 
    Route::post('/update/{id}', [PropertyController::class, 'update'])->name('properties.update');  
    Route::get('/delete/{id}', [PropertyController::class, 'delete'])->name('properties.delete');      
});
Route::get('/',[HomePageController::class, 'index'] );
Route::get('/properties-details/{id}',[HomePageController::class, 'properties_details'])->name('homepage.detail');
Route::get('/properties-list/{slug}',[HomePageController::class, 'properties_lists'])->name('homepage.list');;
Route::prefix('homepage')->group(function () {
    Route::get('/submit-property-page', [HomePageController::class, 'submitPropertyPage'])->name('homepage.submitPropertyPage');  
    Route::post('/submit-property', [HomePageController::class, 'submitProperty'])->name('homepage.submitProperty');
    Route::post('/get-district', [HomePageController::class, 'getDistrict'])->name('homepage.getDistrict');    
});