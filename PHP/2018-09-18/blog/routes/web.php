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
//     return 'phong';
// });
// Route::get('foo', function () {
//     return 'phonga';
// });
Route::get('test', function () {
    return 'phongsadklsajdlksj';
});
Route::get('Controller1','Controller@testAction1');

Route::get('Controller2','controller@testAction2');

Route::get('Controller3','Controller@testAction3');
Route::get('Controller4','Controller@testAction4');
Route::get('Controller5','Controller@testAction5');
Route::get('view1',function(){
    return view('view1');
});
Route::get('view2',function(){
    return view('view2');
});
Route::get('view3',function(){
    return view('view3');
});
Route::get('view4',function(){
    return view('login');
});
Route::get('view5',function(){
    return view('view2');
});