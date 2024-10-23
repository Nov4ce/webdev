<?php

use App\Http\Controllers\BlogSController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin'], function(){

    Route::get('home', function(){
        return view('Layout/activity');
    })->name('homePage');
    
    Route::get('user/{id}/{name}', function($id, $name){
        return "<a href = '".route("settingsPage", ['id' => $id,'name' => $name])."'> "."Settings </a>";
        // . "" ."<a href = '".route("aboutPage")."'> "."About </a>";
    });
    
    Route::get('about', function(){
        return "About Page";
    })->name("aboutPage");
    
    Route::get('settings/{id}/{name}', function($id, $name){
       return $id. " " .$name; 
    })->name("settingsPage");

});


// Common Folder -----------------------------------------------------------------------------
Route::get('Home', function(){
    return view('Common/Home');
});

Route::get('About', function(){
    $about = "Hello World by Aboutbot";
    
    return view('Common/About', ['about' => $about]);
    // return view ('Common/About', compact('About'));
});

Route::get('Contact', function(){
    return view('Common/Contact');
});

// Route::get('Blogs', function(){
//     $blogs = [
//                 ['title' => 'Title one', 'body' => 'This is body 1', 'status' => 1],s
//                 ['title' => 'Title two', 'body' => 'This is body 2', 'status' => 0],
//                 ['title' => 'Title three', 'body' => 'This is body 3', 'status' => 1],
//                 ['title' => 'Title four', 'body' => 'This is body 4', 'status' => 0],
//                 ['title' => 'Title five', 'body' => 'This is body 5', 'status' => 1],
//                 ['title' => 'Title six', 'body' => 'This is body 6', 'status' => 0],
//                 ['title' => 'Title seven', 'body' => 'This is body 7', 'status' => 1]
//             ];
//     return view('Common/Blogs', compact('blogs'));
// });

// Common Folder -----------------------------------------------------------------------------


// October 19, 2024
// LogIn Form
Route::get('login', [LoginController::class, 'index'])->name('login');  
Route::post('login', [LoginController::class, 'loginSubmit'])->name('login.submit');

Route::get('blogs', [BlogSController::class, 'index']);
Route::resource('home1', HomeController::class);
// October 19, 2024



// Fallback Route
// Route::fallback(function(){
    
//     // return "
//     // <center>
//     //     <img src='/images/eeengk.jpg' alt= 'Warning!'>
//     //     <h4 style = 'font-family: Arial, Helvetica, sans-serif;'>
//     //         I'M SORRY TO TELL YOU THIS, BUT YOUR COMPUTER HAS A CORONA-VIRUS
//     //     </h4>
//     // </center>";

//     return redirect()->route('homePage');
// });

