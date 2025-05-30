<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create']);

Route::get('/teste', function(){
    return 'Olá Mundo';
});

Route::get('/contact', function(){
    return view('contact');
});

Route::get('/produtos', function(){

    $busca = request('search');

    return view('products', ['busca' => $busca]);
});

Route::get('/produtos_testes/{id?}', function($id = null){
    return view('product', ['id' => $id]);
});

