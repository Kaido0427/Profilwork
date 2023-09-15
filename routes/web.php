<?php

use App\Http\Controllers\Cavis;
use App\Http\Controllers\Cjob;
use App\Http\Controllers\ChatC;
use App\Http\Controllers\Cprop;
use App\Http\Controllers\Profilfree;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\conversationsC;
use App\Http\Controllers\ProfilController;
use App\http\Controllers\PaymentController;
use App\Models\job;
use App\Models\transaction;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $missions = job::all()->take(3);
    return view('welcome', compact('missions'));
});


//--Routes des profils freelances---------------------------//

Route::get('/Freelance/create', [Profilfree::class, 'create'])->name('Freelance.create');
Route::patch('/Freelance/{id}', [Profilfree::class, 'update'])->name('Freelance.update');
Route::get('/Freelance/edit/{id}', [Profilfree::class, 'edit'])->name('Freelance.edit');


Route::get('/Freelance/{id}', [Profilfree::class, 'show'])->name('Freelance.show');

Route::get('/Freelance', [Profilfree::class, 'index'])->name('Freelance.index');

//===================================================================//
//routes des artisans


Route::get('/artisan/create', [ProfilController::class, 'create'])->name('artisan.create');
Route::patch('/artisan/{id}', [ProfilController::class, 'update'])->name('artisan.update');
Route::get('/artisan/edit/{id}', [ProfilController::class, 'edit'])->name('artisan.edit');


Route::get('/artisan/{id}', [ProfilController::class, 'show'])->name('artisan.show');

Route::get('/artisan', [ProfilController::class, 'index'])->name('artisan.index');


//===================================================================//
//Routes des missions

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::middleware(['auth'])->group(function () {

    Route::controller(Cjob::class)->group(function () {

        Route::get('jobs/index', 'index')->name('jobs.index');

        Route::get('/jobs/create', 'create')->name('jobs.create');

        Route::post('/jobs', 'store');


        Route::post('jobs/{jobcat}', 'store')->name('jobcats.jobs.create');
    });
});
Route::get('/jobs/edit/{id}', [Cjob::class, 'edit'])->name('jobs.edit');

Route::get('/jobs/{jb}', [Cjob::class, 'show'])->name('jobs.show');

Route::patch('/jobs/{id}', [Cjob::class, 'update'])->name('jobs.update');

Route::delete('/jobs/{job}', [Cjob::class, 'destroy'])->name('jobs.destroy');


//===========================================================================
//route des propositions

Route::middleware(['auth'])->group(function () {

    Route::controller(Cprop::class)->group(function () {

        Route::get('propositions/index', 'index')->name('propositions.index');

        Route::get('/propositions/create', 'create')->name('propositions.create');


        Route::post('/propositions/{jb}', 'store')->name('propositions.store');
    });
});

Route::get('/propositions/edit/{id}', [Cprop::class, 'edit'])->name('propositions.edit');

Route::get('/propositions/{id}', [Cprop::class, 'show'])->name('propositions.show');

Route::patch('/propositions/{id}', [Cprop::class, 'update'])->name('propositions.update');

Route::delete('/propositions/{id}', [Cprop::class, 'destroy'])->name('propositions.destroy');



//route des chats
Route::middleware(['auth'])->group(function () {
    Route::post('/validation/{proposition}', [Cprop::class, 'confirm'])->name('confirm.prop');
    Route::get('/chats', [ChatC::class, 'index'])->name('chats.index');
    Route::get('/chats/{id}', [ChatC::class, 'show'])->name('chats.show');
});



//route des chats
Route::middleware(['auth'])->group(function () {
    Route::post('/recruter/{profil}', [Cprop::class, 'recruter'])->name('recruter');
});
// Routes pour PaymentController
Route::get('/Payement/index', function () {
    return view('Payement.index');
})->name('Payement.index');
Route::get('/history_payment', function () {
    $transactions = transaction::all();
    return view('history_payment', compact('transactions'));
})->name('historique');



//route des conversations

route::get('/conversations/index', [conversationsC::class, 'index'])->name('conversations.index');




//================================
//payment ways
Route::post('pay', [PaymentController::class, 'pay'])->name('payment');
Route::get('/payerror', [PaymentController::class, 'paymentCancel'])->name('Payement.cancel');
Route::get('/paysuccess', [PaymentController::class, 'paymentSuccess'])->name('Payement.success');




route::get('/conversations/index', [conversationsC::class, 'index'])->name('conversations.index');

//  routes avis

Route::controller(Cavis::class)->group(function () {

    Route::post('/rate/{pf}', 'store')->name('avis.store');
});
