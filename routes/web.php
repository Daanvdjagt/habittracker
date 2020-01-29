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

Route::get('/', function () {
    return view('welcome');
});


Route::get('habits', function() {
    return response()->json([
        [
        'title' => 'Water intake',
        'subtitle' => 'Stay hydrated throughout the day!',
        'currentValue' => "3L of water consumed today",
        'recordValue' => '5L of water consumed today'
        ],
    
        [
            'title' => 'Reading',
            'subtitle' => 'Get that knowledgebase bigger',
            'currentValue' => '20 pages of a book have been read today',
            'recordValue'=> '1 full book in one day'
        ],
        [
            'title' => 'Going to the gym',
            'subtitle' => 'Stay movin',
            'currentValue' => '3 times already this week',
            'recordValue' => '5 times in a week'
        ],
        [
            'title' => 'Leisure',
            'subtitle' => 'Get that beautiful content out there',
            'currentValue' => 'Posted 0 photos on instagram',
            'recordValue'=> '3 photos posted on instagram in a day'
        ]
        ]);
        });


//  [
//                 {
//                     title: "Water intake",
//                     subtitle: "Stay hydrated throughout the day!",
//                     currentValue: "3L of water consumed today",
//                     recordValue: "5L of water consumed"
//                 },
//                 {
//                     title: "Reading",
//                     subtitle: "Get that knowledgebase bigger",
//                     currentValue: "20 pages of a book have been read today",
//                     recordValue: "1 full book in one day"
//                 },
//                 {
//                     title: "Going to the gym",
//                     subtitle: "Stay movin'",
//                     currentValue: "3 times already this week",
//                     recordValue: "5 times in a week"
//                 },
//                 {
//                     title: "Leisure",
//                     subtitle: "Get that beautiful content out there",
//                     currentValue: "Posted 0 photos on instagram",
//                     recordValue: "3 photos posted on instagram in a day"
//                 }
//             ]

