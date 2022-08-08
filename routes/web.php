<?php

use App\Mail\EmployeMail;
use Illuminate\Support\Facades\Mail;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';



// Admin
Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
    Route::namespace('Auth')->middleware('guest:admin')->group(function(){
        // login route
        Route::get('login','AuthenticatedSessionController@create')->name('login');
        Route::post('login','AuthenticatedSessionController@store')->name('adminlogin');
    });
    Route::middleware('admin')->group(function(){



        Route::get('dashboard','HomeController@index')->name('dashboard');

        Route::get('employes/invite','EmployeController@inviterEmploye')->name('employes.invite');
        Route::post('employes/invite','EmployeController@sendMail')->name('employes.invite.send');
        Route::resource('societes','SocieteController');
        Route::resource('historiques','HistoriqueController');
        Route::resource('employes','EmployeController');
        Route::resource('invitations','InvitationController');



    });
    Route::post('logout','Auth\AuthenticatedSessionController@destroy')->name('logout');
});


//
Route::middleware('auth')->group(function(){

    Route::resource('employes/societe','EmployesocieteController');
    Route::get('profil','EmployesocieteController@modifier')->name('profil');
    Route::post('profil/{id}','EmployesocieteController@edit')->name('profil.edit');

});

Route::get('/create/{id?}','EmployeauthController@createEmploye')->name('create_employe');
Route::post('/create','EmployeauthController@signUpEmploye')->name('signUp_employe');






