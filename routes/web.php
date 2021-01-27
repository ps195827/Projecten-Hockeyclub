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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::redirect('/', '/login');

// Route::get('/home', function () {
//     if (session('status')) {
//         return redirect()->route('home')->with('status', session('status'));
//     }

//     return redirect()->route('home');
// });

Route::group(['middleware' => 'auth'], function(){
    //Route::resource('/home', App\Http\Controllers\HomeController::class);
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
    Route::resource('/domein', App\Http\Controllers\DomeinController::class);
    Route::resource('/sector', App\Http\Controllers\SectorController::class);
    Route::resource('/subsector', App\Http\Controllers\SubsectorController::class);
    Route::resource('/category', App\Http\Controllers\CategoryController::class);
    Route::resource('/leerfase', App\Http\Controllers\LeerfaseController::class);
    Route::resource('/doelgroep', App\Http\Controllers\DoelgroepController::class);
    Route::resource('/team', App\Http\Controllers\TeamController::class);
    Route::resource('/tag', App\Http\Controllers\TagController::class);
    Route::resource('/spelfase', App\Http\Controllers\SpelfaseController::class);
    Route::resource('/trainingsonderdeel', App\Http\Controllers\TrainingsonderdeelController::class);
    Route::resource('/moeilijkheidsgraad', App\Http\Controllers\MoeilijkheidsgraadController::class);
    Route::resource('/oefening', App\Http\Controllers\OefeningController::class);
    Route::resource('/website', App\Http\Controllers\WebsiteController::class);
    Route::resource('/werkvorm', App\Http\Controllers\WerkvormController::class);
    Route::resource('/profiel', App\Http\Controllers\UserController::class);
    Route::resource('/mededeling', App\Http\Controllers\MededelingController::class);
    Route::resource('/melding', App\Http\Controllers\MeldingController::class);
    Route::resource('/training', App\Http\Controllers\TrainingController::class);
    Route::resource('/admin', App\Http\Controllers\AdminController::class);
    Route::resource('/auteur', App\Http\Controllers\AuteurController::class);
    Route::resource('/trainer', App\Http\Controllers\TrainerController::class);
    Route::resource('/speler', App\Http\Controllers\SpelerController::class);

    
    Route::resource('/document' , App\Http\Controllers\DocumentController::class);
    Route::resource('/foto' , App\Http\Controllers\FotoController::class);
    Route::resource('/bibliotheek' , App\Http\Controllers\BibliotheekController::class);
    Route::resource('/video', App\Http\Controllers\VideoController::class);
    Route::resource('/media', App\Http\Controllers\MediaController::class);


    Route::get('/oefeningdelete', [App\Http\Controllers\OefeningController::class, 
        'index_delete'])->name('oefening.index_delete');
    Route::get('/oefening/restore/{id}', [App\Http\Controllers\OefeningController::class, 
         'restore'])->name('oefening.restore');
    Route::delete('/oefening/kill/{id}', [App\Http\Controllers\OefeningController::class, 
         'kill'])->name('oefening.kill');
   


    Route::get('/test', [App\Http\Controllers\TestController::class, 'querybuilder'])->name('student.innerjoin');

    // Route::name('media.')->group(function () {
    //     Route::get('media', function () {
    //         Route::resource('/media/video' , App\Http\Controllers\VideoController::class);
    //     })->name('media');
    // });

    // losse views
    //Route::view('/media/video/index', 'media.video.index')->name('video_index');
    Route::view('/help', 'help.index')->name('help_index');
    

});

Auth::routes();

// Route::get('/media/video', function () {
//     return view('media.video.index');
// });



//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/home/category', function () {
//     return view('category.index');
// });

//Route::resource('/category','App\Http\Controllers\CategoryController@index');

//Route::get('/category', [CategoryController::class, 'index']);

//Route::get('/dashboard', App\Http\Controllers\HomeController::class);

//Route::get('/category', [App\Http\Controllers\CategoryController::class, 'index']);
//Route::get('/create', [App\Http\Controllers\CategoryController::class, 'create']);
