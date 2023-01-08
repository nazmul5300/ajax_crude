<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\ManageUserController;

/*
|--------------------------------------------------------------------------
| ManageUser Routes
|--------------------------------------------------------------------------
*/

Route::get('/adduser',[ManageUserController::class,'adduser'])->name('adduser');
Route::post('/userpost',[ManageUserController::class,'store']);
Route::get('/usershow',[ManageUserController::class,'show']);
Route::get('/userdelete/{id}',[ManageUserController::class,'userdelete']);
Route::get('/usereidt/{id}',[ManageUserController::class,'usereidt']);
Route::post('/userupdate/{id}',[ManageUserController::class,'userupdate']);







/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});
