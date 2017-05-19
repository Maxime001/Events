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

Route::get('/', function(){
   return redirect('/events');
} );
/*Route::name('home')->get('/','PagesController');*/

Route::resource('events','EventsController',
    [
        'names' => [
            'index' => 'events_path',
            'show' => 'event_path'
        ],
        'parameters' => [
            'events' => 'e'
        ]
    ]);

// Si on ne veux pas toutes les ressources

/*Route::resource('photo','PhotoController', ['only' => [ 'index','show']]);*/
/*Route::resource('photo','PhotoController', ['except' => [ 'index','show']]);*/


/*Route::resource('courses','CoursesController');
Route::resource('courses.lectures','LecturesController');*/