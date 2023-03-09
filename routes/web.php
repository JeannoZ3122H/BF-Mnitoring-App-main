<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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

//admin
Route::get('/admin', [AdminController::class, 'index'])->name('admin');

Route::post('/admin/add-categorie', [AdminController::class, 'add_categorie'])->name('add_categorie');
Route::get('/admin/gestion-categorie', [AdminController::class, 'gestion_categorie'])->name('gestion_categorie');
Route::get('/admin/form-categorie', [AdminController::class, 'form_categorie'])->name('form_categorie');

Route::post('/admin/add-media', [AdminController::class, 'add_media'])->name('add_media');
Route::get('/admin/gestion-media', [AdminController::class, 'gestion_media'])->name('gestion_media');
Route::get('/admin/form-media', [AdminController::class, 'form_media'])->name('form_media');

Route::post('/admin/add-assignation', [AdminController::class, 'add_assignation'])->name('add_assignation');
Route::get('/admin/assignation', [AdminController::class, 'assignation'])->name('assignation');
Route::get('/admin/form-assignation', [AdminController::class, 'form_assignation'])->name('form_assignation');

Route::post('/admin/add-faute', [AdminController::class, 'add_faute'])->name('add_faute');
Route::get('/admin/gestion-faute', [AdminController::class, 'gestion_faute'])->name('gestion_faute');
Route::get('/admin/form-faute', [AdminController::class, 'form_faute'])->name('form_faute');

Route::post('/admin/add-sanction', [AdminController::class, 'add_sanction'])->name('add_sanction');
Route::get('/admin/sanction', [AdminController::class, 'sanction'])->name('sanction');
Route::get('/admin/form-sanction', [AdminController::class, 'form_sanction'])->name('form_sanction');

Route::post('/admin/add-utilisateur', [AdminController::class, 'add_utiliasteur'])->name('add_utilisateur');
Route::get('/admin/gestion-utilisateur', [AdminController::class, 'gestion_utilisateur'])->name('gestion_utilisateur');
Route::get('/admin/form-utilisateur', [AdminController::class, 'form_utilisateur'])->name('form_utilisateur');

Route::post('/admin/add-groupe', [AdminController::class,'add_groupe'])->name('add_groupe');
Route::get('/admin/gestion-groupe', [AdminController::class, 'gestion_groupe'])->name('gestion_groupe');
Route::get('/admin/form-groupe', [AdminController::class, 'form_groupe'])->name('form_groupe');


Route::get('/admin/gestion-journal', [AdminController::class,'journal'])->name('journal');

Route::get('/admin/gesttion-rapport', [AdminController::class,'rapport'])->name('rapport');

Route::post('/admin/add-regulation', [AdminController::class, 'add_regulation'])->name('add_regulation');
Route::get('/admin/regulateur', [AdminController::class,'regulateur'])->name('regulateur');
Route::get('/admin/form-regulateur', [AdminController::class,'form_regulateur'])->name('form_regulateur');

Route::post('/admin/add-outil', [AdminController::class,'add_outil'])->name('add_outil');
Route::get('/admin/outil-regulation', [AdminController::class,'outil_regulation'])->name('outil_regulation');
Route::get('/admin/form-outil', [AdminController::class,'form_outil'])->name('form_outil');


Route::get('/admin/projet-courrier', [AdminController::class,'projet_courrier'])->name('projet_courrier');

Route::get('/admin/courrier-envoye', [AdminController::class,'courrier_envoye'])->name('courrier_envoye');
