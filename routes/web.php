<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

//Rota get
Route::get('/', function () {
    return view('home');
});

Route::get('/contact', function(){
    return view('contact');
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


// Rota post
Route::post('/formsubmitted', function(Request $request){
    $request->validate([
        'fullname' => 'required|min:3|max:30',
        'email' => 'required|min:3|max:30|email',
    ]);

    $fullname = $request->input("fullname");
    $email = $request->input("email");

    return "Your fullname is: $fullname and your email is $email";
});