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

use Faker\Guesser\Name;

Route::get('/', function (){
    return view('welcome');
});
Route::get('/action', function (){
    return view('pages.action');
})->name('action');
Route::get('/about', function (){
    return view('pages.about');
})->name('about');
Route::get('/join', function (){
    return view('pages.join');
})->name('join');
Route::get('/news', function (){
    return view('pages.news');
})->name('news');
Route::get('/contact', function (){
    return view('pages.contact');
})->name('contact');

// Create route teacher
Route::get('/teacher/{index}',function($index){
     $teachers = array('Channak','Ronan','Sieha','Rady','Rith');
     $count = 0;
     if($index < count($teachers)){
        echo "The teacher is: ".$teachers[$index];
     }else{
         echo " The array is: ";
         for($i = 0; $i < count($teachers); $i++){
            $count = count($teachers)-1;
            if($i < count($teachers)){
            echo "[$i] "."$teachers[$i],";
            }else if($i == count($teachers)-1){
            echo "$teachers[$i]";
            }
         }
       echo "</br>";
       echo "No teacher with this index: ". $index;
       echo "</br>";
       echo "The largest index is: ". $count;
     }
});
