<?php

use Illuminate\Support\Facades\Route;

//Rota get
Route::get('/', function () {
    return view('home');
});

//Parâmetros 
Route::get('/contact/{firstname}/{lastname}', function ($firstname, $lastname) {
    return $firstname. " " .$lastname;
});


//Rotas nomeadas
Route::get('/test', function(){
    return 'teste';
})->name('testpage');

// Rotas relacionadas
Route::prefix('/portfolio')->group(function(){
    Route::get('/company', function(){
        return view('company');
    });

    Route::get('/organization', function(){
        return view('organization');
    });
});
