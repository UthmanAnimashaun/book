<?php

use Illuminate\Support\Facades\Route;

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
/*
||
||
||The first string is the one on web and its case sensitive e.g 
                localhost:8000/home
||The second string is a name of a file in view folder but not case sensitive e.g 
                            home.blade.php
*/
Route::get('/', function () {
    return view('welcome');
});
Route::get('about', function(){ 
    //getting data from db
    $pizzas = [
        ['type' => 'Hawaaian', 'base' => 'cheesy crust', 'price' => 10],
        ['type' => 'volcano', 'base' => 'garlic crust', 'price' => 100],
        ['type' => 'Veg Supreme', 'base' => 'Thin and crispy', 'price' => 1000]
    ];

   

    // the first 'pizzas' is called a property 
    // the second $pizzas is the variable holding the array 
    return view('about',[
        'pizzas' => $pizzas,
        'name' => request('name'),
        'age' => request('age')
    ]);
});

Route::get('about/{id}', function($id){
    //use the $id variable to query the db for a record
    return view('details', ['id' =>$id]);

});


Route::view('blog', 'blog');
Route::view('hello','hello');
Route::view('post','post');
//Route::view('about','about');