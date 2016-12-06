<?php

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

// Route::get('/', function () {
//   $people = ['Taylor', 'Matt', 'Jeffrey'];
//   //4 ways to return data to the view
//
//   //First Option
//   // return view('welcome', ['people' => $people]);
//   //Second Option
//   return view ('welcome', compact('people'));
//   //Third Option
//   // return view('welcome')->with('people', $people);
//   // Fourth Option
//   // return view('welcome')->withPeople($people);
// });

Route::get('/', 'PagesController@home');

Route::get('about', function() {
  return view('pages.about');     //This is telling laravel, 'look into' /resources/views/pages/about.blade.php
});
