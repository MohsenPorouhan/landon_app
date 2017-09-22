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
//Route::get('/', 'ContentController@home');
//Route::get('/clients', 'ClientController@index');
//Route::get('/clients/new', 'ClientController@newClient');
//Route::post('/clients/new', 'ClientController@create');
//Route::get('/clients/{client_id}', 'ClientController@show');
//Route::post('/clients/{client_id}', 'ClientController@modify');
//Route::get('/reservations/{client_id}', 'RoomsController@checkAvailableRooms');
//Route::post('/reservations/{client_id}', 'RoomsController@checkAvailableRooms');
//Route::get('/book/room/{client_id}/{room_id}/{dtae_in}/{date_out}', 'ReservationsController@bookRoom');
//Route::get('/clients', 'ClientController@index')->name('clients')->middleware('auth');
Route::middleware('auth')->group(function() {
    Route::get('/', 'ContentController@home')->name('home');
    Route::get('/clients', 'ClientController@index')->name('clients');
    Route::get('/clients/new', 'ClientController@newClient')->name('new_client');
    Route::post('/clients/new', 'ClientController@newClient')->name('create_client');
    Route::get('/clients/{client_id}', 'ClientController@show')->name('show_client');
    Route::post('/clients/{client_id}', 'ClientController@modify')->name('update_client');

    Route::get('/reservations/{client_id}', 'RoomsController@checkAvailableRooms')->name('check_room');
    Route::post('/reservations/{client_id}', 'RoomsController@checkAvailableRooms')->name('check_room');

    Route::get('/book/room/{client_id}/{room_id}/{date_in}/{date_out}', 'ReservationsController@bookRoom')->name('book_room');
    Route::get('export', 'ClientController@export');
    Route::get('/upload', 'ContentController@upload')->name('upload');
    Route::post('/upload', 'ContentController@upload')->name('upload');
});


//Route::get('/', function () {
////    return '<h3>Landon App Page</h3>';
//    $data = [];
//    $data['version'] = '0.1.1';
//    return view('welcome', $data);
//});

Route::get('/about', function () {
    $response_arr[] = [];
    $response_arr['author'] = 'BP';
    $response_arr['version'] = '0.1.1';
    return $response_arr;
//    return '<h3>About</h3>';
});

//Route::get('/home', function () {
//    $data = [];
//    $data['version'] = '0.1.1';
//    return view('welcome', $data);
//});

Route::get('/di', 'ClientController@di');

Route::get('/facades/db', function () {
    return DB::select('select * from table');
});

Route::get('/facades/encrypt', function () {
    return Crypt::encrypt('123456789');
});

//registerbooteyJpdiI6InU1N2JKMjBwK2lEcXIzV250ME9LOHc9PSIsInZhbHVlIjoiUnVtOUlVc2s4TnFvc3RabmNLb2NvaUltRDE5b3AwZjBxTXphbVNEQXVUVT0iLCJtYWMiOiJkODQyZWZhY2E1NjRkMDExZTUzMzEzOTcyOGI5YWMyMTE1ZDU3MGRlODBlMTMzOWM4YTE1Y2JlYzhkYTA2MjAzIn0
Route::get('/facades/decrypt', function () {
    return Crypt::decrypt('eyJpdiI6InU1N2JKMjBwK2lEcXIzV250ME9LOHc9PSIsInZhbHVlIjoiUnVtOUlVc2s4TnFvc3RabmNLb2NvaUltRDE5b3AwZjBxTXphbVNEQXVUVT0iLCJtYWMiOiJkODQyZWZhY2E1NjRkMDExZTUzMzEzOTcyOGI5YWMyMTE1ZDU3MGRlODBlMTMzOWM4YTE1Y2JlYzhkYTA2MjAzIn0');
});

Route::get('/generate/password', function() {
    return bcrypt('123456789');
});


Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
