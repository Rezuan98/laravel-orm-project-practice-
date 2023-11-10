<?php

use Illuminate\Support\Facades\Route;

use App\Http\controllers\orm;

Route::get('/',[orm::class,'orm']);
Route::post('/insert',[orm::class,'orminsert']);
Route::get('/delete/{id}',[orm::class,'ormdelete']);
Route::get('/edit/{id}',[orm::class,'ormedit']);
Route::post('/update/{id}',[orm::class,'ormupdate']);