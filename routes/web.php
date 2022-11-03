<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
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


// this Route get all record form database  view in product table page
Route::get('/', [userController::class , "GetProduct"] );

//in this Route we insert data in database from Add record  form 
Route::post("addProduct" , [userController::class , "insertProduct"]);

// in this Route we get Id form Edit button when ever user click button , And in this Route we get data of specific Id where user given
Route::get("EditProduct/P_id={id}" , [userController::class , "GetProductData"]);

// in this Route we update record which is showing in update form in edit view file 
Route::post("modifyData" , [userController::class , "modifyProductData"]);

// in this Route we delete data which id where user clicked
Route::get("DelProduct/{id}" , [userController::class , "DeleteProduct"]);