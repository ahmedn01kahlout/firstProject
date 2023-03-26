<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are l
oaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $tasks = DB::table('tasks')->get();
    return view('index', compact('tasks'));
});

Route::get('about', function () {
    $name = "Ahmed";
    return view('about', compact('name'));
});

Route::post('about', function () {

    if(isset($_POST['name']))
        $name = $_POST['name'];
    return view('about', compact('name'));
});

Route::get('tasks',function(){
    $tasks = ['task1', 'task2', 'task3'];
    return view('tasks',compact('tasks'));
});

Route::post('delete/{id}',function($id){
    DB::table('tasks')->where('id',$id)->delete();

    return redirect()->back();
});

Route::post('insert',function(){
    DB::table('tasks')->insert(['name' => $_POST['name'],
    'created_at'=> now(),
    'updated_at'=> now()
]);

    return redirect()->back();
});
