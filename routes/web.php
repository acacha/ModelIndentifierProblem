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

use App\Events\IncidentStored;
use App\Incident;
use App\User;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/error', function () {
    $user = factory(User::class)->create();
    $incident = Incident::create([
        'subject' => 'subject',
        'description' => 'description',
        'user_id' => $user->id
    ]);
    event(new IncidentStored($incident));
});
