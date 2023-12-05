<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConcoursController;
use App\Http\Controllers\ElevesController;
use App\Http\Controllers\EmploisController;
use App\Http\Controllers\EnseignantsController;
use App\Http\Controllers\MatieresController;
use App\Http\Controllers\NotesController;
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
// Route::resource("/student", ElevesController::class);
// route::get("/home",function(){
//     return view("acceuil");
// });
Route::group(['prefix' => '/{indx}','middleware' => 'auth'], function () {
    Route::get("/create", [ConcoursController::class, "create"]);
    Route::get("/list", [ConcoursController::class, "index"]);
    Route::get("{id}/{method}", [ConcoursController::class, "show"])->name("show");
    Route::post('/creation', [ConcoursController::class, "store"]);
    // Route::get('/modifier/{id}', [ElevesController::class, "edit"]);
    Route::put('{id}', [ConcoursController::class, "update"]);
    Route::delete("supprimer/{id}", [ConcoursController::class, "destroy"]);
});
// Route::group(["prefix"=>"/cours"],function(){
//     Route::get("/create", [CoursController::class, "create"]);
//     Route::get("/list", [CoursController::class, "index"]);
//     Route::get("{id}/{method}", [CoursController::class, "show"])->name("show");
//     Route::post('/creation', [CoursController::class, "store"]);
//     Route::put('{id}', [CoursController::class, "update"]);
//     Route::delete("supprimer/{id}", [CoursController::class, "destroy"]);
// });
// Route::group(["prefix"=>"/notes"],function(){
//     Route::get("/create-note", [NotesController::class, "create"]);
//     Route::get("/list", [NotesController::class, "index"]);
//     Route::post('create-note', [NotesController::class, "store"]);
//     Route::get("{id}/{method}", [NotesController::class, "show"])->name("show");
//     Route::put('{id}', [NotesController::class, "update"]);
//     Route::delete("supprimer/{id}", [NotesController::class, "destroy"]);
// });
// Route::group(["prefix"=>"/enseignant"],function(){
//     Route::get("{crtenseignants}", [EnseignantsController::class, "create"]);
//     Route::get("{enseigindx}", [EnseignantsController::class, "index"]);
//     Route::post('create-note', [EnseignantsController::class, "store"]);
//     Route::get("{id}/{method}", [EnseignantsController::class, "show"])->name("show");
//     Route::put('{id}', [EnseignantsController::class, "update"]);
//     Route::delete("supprimer/{id}", [EnseignantsController::class, "destroy"]);
// });
// Route::group(["prefix"=>"/matiere"],function(){
//     Route::get("{crtmatieres}", [MatieresController::class, "create"]);
//     Route::get("{matindx}", [MatieresController::class, "index"]);
//     Route::post('create-note', [MatieresController::class, "store"]);
//     Route::get("{id}/{method}", [MatieresController::class, "show"])->name("show");
//     Route::put('{id}', [MatieresController::class, "update"]);
//     Route::delete("supprimer/{id}", [MatieresController::class, "destroy"]);
// });
// Route::group(["prefix"=>"/emplois"],function(){
//     Route::get("{crtemplois}", [EmploisController::class, "create"]);
//     Route::get("{emindx}", [EmploisController::class, "index"]);
//     Route::post('create-note', [EmploisController::class, "store"]);
//     Route::get("{id}/{method}", [EmploisController::class, "show"])->name("show");
//     Route::put('{id}', [EmploisController::class, "update"]);
//     Route::delete("supprimer/{id}", [EmploisController::class, "destroy"]);
// });
// Route::prefix('admin')->group(function () {
    
// });
Auth::routes();

Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
