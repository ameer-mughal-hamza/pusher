<?php
use App\Events\TaskEvent;
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
    return view('pusher');
});

//Route::get('event',function (){
//    event(new TaskEvent('Ameer Hamza','Finally done with Pusher to send Notifications to specific user'));
//})->name('event');
Route::post('event',[
    'uses' => 'PusherController@event',
    'as' => 'event'
]);