<?php

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


Route::get('/habits', function () {
    return response()->json([
        [
            'id' => '1',
            'name'=>'Water intake',
            'subtitle'=>'Stay hydrated yo',
            'currentValue'=>'0',
            'recordValue'=>'3',
            'type' => 'water',
            'valueType' => 'L'
        ],
        [
            'id' => '2',
            'name'=>'Reading',
            'subtitle'=>'Expand that knowledgebase yo',
            'currentValue'=>'0',
            'recordValue'=>'10',
            'type' => 'reading',
            'valueType' => 'pages'
        ],
        [
            'id' => '3',
            'name'=>'Going to the gym',
            'subtitle'=>'Stay active yo',
            'currentValue'=>'0',
            'recordValue'=>'4',
            'type' => 'gym.exercise',
            'valueType' => 'gym visits'

        ]
        
    ]);


});
