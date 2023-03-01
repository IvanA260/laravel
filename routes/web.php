<?php
use App\Http\Controllers\CoctelesApiController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProjectController;
use GuzzleHttp\Client;

//App::setlocale('es');

Route::view('/', 'home')->name('home');
Route::view('/quienes-somos', 'about')->name('about');

//Route::resource('portfolio', 'ProjectController')
//	->parameters(['portafolio' => 'project'])
//	->names('projects');

Route::get('/portafolio', [ProjectController::class, 'index'])->name('projects.index');
Route::get('/portafolio/crear',[ProjectController::class, 'create'])->name('projects.create');
Route::get('/portafolio/{project}/editar',[ProjectController::class, 'edit'])->name('projects.edit');
Route::patch('/portafolio/{project}',[ProjectController::class, 'update'])->name('projects.update');
Route::post('/portafolio', [ProjectController::class, 'store'])->name('projects.store');
Route::get('/portafolio/{project}',[ProjectController::class, 'show'])->name('projects.show');
Route::delete('/portafolio/{project}',[ProjectController::class, 'destroy'])->name('projects.destroy');

Route::view('/contacto', 'contact')->name('contact');
Route::post('contact', [MessageController::class, 'store'])->name('messages.store');

Auth::routes(['register' => true]);


Route::get('/leer', [CoctelesApiController::class, 'leer'])->name('leer');
//Route::get('/', function(GuzzleHttp\Client $client))
//$response = $client->request('GET',"posts");
//$data = json_decode($response->)
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


