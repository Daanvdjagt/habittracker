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

        ],
        [
            'id' => '4',
            'name'=>'Sleep schedule',
            'subtitle'=>'Keep that rest up yo',
            'currentValue'=>'6',
            'recordValue'=>'8',
            'type' => 'sleep',
            'valueType' => 'hours slept tonight'

        ],
        [
            'id' => '5',
            'name'=>'Photography',
            'subtitle'=>'Keep at it with those hobbys yo',
            'currentValue'=>'0',
            'recordValue'=>'10',
            'type' => 'leisure.photography',
            'valueType' => 'photos taken today'

        ],
        [
            'id' => '6',
            'name'=>'Journaling',
            'subtitle'=>'Keep remind yourself of what should do yo',
            'currentValue'=>'1',
            'recordValue'=>'3',
            'type' => 'journaling',
            'valueType' => 'entries made in the diary'

        ]
        
    ]);
});

Route::get('/team', function (){
    return response()->json([
        [
            'id' => '1',
            'image_url' => "https://images.pexels.com/photos/3153203/pexels-photo-3153203.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260",
            'name' => 'John',
            'surname' => 'Doe',
            'function' => 'Senior developer',
            'socials' => [
                'twitter' => 'johndoesdev',
                'instagram' => 'johndoesinsta'
            ],
            'email' => 'johndoe@example.com',
            'phone' => '+300000000'
        ],
        [
            'id' => '2',
            'image_url' => "https://images.pexels.com/photos/3633148/pexels-photo-3633148.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260",
            'name' => 'Jane',
            'surname' => 'Doe',
            'function' => 'Lead designer',
            'socials' => [
                'twitter' => 'janedoesdesign',
                'instagram' => 'janedoesinsta'
            ],
            'email' => 'janedoe@example.com',
            'phone' => '+300000001'
        ],
        [
            'id' => '3',
            'name' => 'Dick',
            'image_url' => "https://images.pexels.com/photos/2182970/pexels-photo-2182970.jpeg?cs=srgb&dl=man-wearing-white-dress-shirt-and-black-blazer-2182970.jpg&fm=jpg",
            'surname' => 'Doe',
            'function' => 'Junior developer',
            'socials' => [
                'twitter' => 'dickdoesdev',
                'instagram' => 'dickdoesinsta'
            ],
            'email' => 'dickdoe@example.com',
            'phone' => '+300000002'
        ]
    ]);
});

