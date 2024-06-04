<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    // return view('welcome');
    return view("Home",[
		"title"=>"Home",
		"active"=>"home"
	]);
});

Route::get('/Menu', function () {
    // return view('welcome');
    return view("Menu",[
		"title"=>"Menu",
		"active"=>"menu"	
	]); //Using Closure
});

Route::get('/About', function () {
    // return view('welcome');
    return view("About",[
		"title"=>"About",
		"active"=>"about"	
	]); //Using Closure
});

Route::get('/Contact', function () {
    // return view('welcome');
    return view("Contact",[
		"title"=>"Contact",
		"active"=>"about"	
	]); //Using Closure
});

// Route::resource('/contactcreate',ContactController::class);
Route::resource('/contactcreate',ContactController::class);