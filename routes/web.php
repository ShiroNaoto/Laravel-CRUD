<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\DivisionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TicketController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;


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
    return redirect()->route('home');
});
                                          //USER VERIFICATION//

    //User Dashboard Authorized
Route::get('/user/dashboard', [RegisteredUserController::class, 'authName1'])
    ->middleware(['auth', 'verified'])
    ->name('user.dashboard');

    //Admin Dashboard Authorized//
Route::get('/admin/dashboard', [RegisteredUserController::class, 'showname1'])
    ->middleware(['auth', 'verified'])
    ->name('admin.dashboard');

Route::get('/home', [HomeController::class, 'verify'])
    ->middleware(['auth', 'verified'])
    ->name('home');

Route::get('/admin/supticket', [ProfileController::class, 'adminsupticket'])
    ->name('admin.supticket');

// Logout route
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');

                                            //USERTABLE ROUTES//   

    //Routes to usertable.php//
Route::get('/admin/usertable', [ProfileController::class, 'usertable'])
    ->name('admin.usertable');

    //Prints Currently Logged Person in database//
Route::get('/admin/usertable', [RegisteredUserController::class, 'showname2'])
    ->middleware(['auth', 'verified'])
    ->name('admin.usertable');

    //Prints all database and Divisions Content//
Route::get('/admin/usertable', [ProfileController::class, 'index'])
    ->name('admin.usertable');

    //Creates User in usertable.php
Route::post('/addUser', [ProfileController::class, 'addUser'])
    ->name('addUser');
    
    //Updates User in usertable.php
Route::post('/updateUser', [ProfileController::class, 'updateUser'])
    ->name('updateUser');

    //Delete Function Route//
Route::delete('/destroyUser', [ProfileController::class, 'destroyUser'])
    ->name('destroyUser');

                                            //DIVTABLE ROUTES//

    //Routes to divtable.php//
Route::get('/admin/divtable', [ProfileController::class, 'divtable'])
    ->name('admin.divtable'); 
    
    //Adds new Division to the table//
Route::post('/addDivision', [DivisionController::class, 'addDivision'])
    ->name('addDivision');

    //Views the table//
Route::get('/admin/divtable', [DivisionController::class, 'index'])
    ->name('admin.divtable');

    //Updates Division to the table
Route::post('/updateDivision', [DivisionController::class, 'updateDivision'])
    ->name('updateDivision');

    //Deletes Division to the table
Route::delete('/destroyDivision', [DivisionController::class, 'destroyDivision'])
    ->name('destroyDivision');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

                                    //USER SUPPORT TICKETS ROUTES//

Route::post('/addTicket', [TicketController::class, 'addTicket'])
    ->name('addTicket');

Route::get('/user/supticket', [TicketController::class, 'index'])
    ->name('user.supticket');

Route::delete('/destroyTicket', [TicketController::class, 'destroyTicket'])
    ->name('destroyTicket');

Route::delete('/destroyTickethome', [TicketController::class, 'destroyTickethome'])
    ->name('destroyTickethome');
    
                                   //ADMIN SUPPORT TICKETS ROUTES//

Route::get('/admin/supticket', [TicketController::class, 'adminindex'])
    ->name('admin.supticket');

Route::post('/updateAdminTicket', [TicketController::class, 'updateAdminTicket'])
    ->name('updateAdminTicket');

Route::post('/updateAdminTickethome', [TicketController::class, 'updateAdminTickethome'])
    ->name('updateAdminTickethome');

Route::delete('/destroyAdminTicket', [TicketController::class, 'destroyAdminTicket'])
    ->name('destroyAdminTicket');

Route::delete('/destroyAdminTickethome', [TicketController::class, 'destroyAdminTickethome'])
    ->name('destroyAdminTickethome');    

                                     //USER COMPLETE TICKETS ROUTES//

Route::get('/user/compticket', [TicketController::class, 'indexFinish'])
    ->name('user.compticket');

Route::delete('/destroycompTicket', [TicketController::class, 'destroycompTicket'])
    ->name('destroycompTicket'); 

                                    //ADMIN COMPLETE TICKETS ROUTES//

Route::get('/admin/compticket', [TicketController::class, 'indexAdminFinish'])
    ->name('admin.compticket');

Route::delete('/destroycompAdminTicket', [TicketController::class, 'destroycompAdminTicket'])
    ->name('destroycompAdminTicket'); 

Route::post('/updateComp', [TicketController::class, 'updateComp'])
    ->name('updateComp');

require __DIR__.'/auth.php';
