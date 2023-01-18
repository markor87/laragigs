<?php

use Illuminate\Http\Request;
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
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' => [
            [
                'id' => 1,
                'title' => 'Listing one',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid beatae cupiditate delectus deleniti dignissimos doloremque hic ipsum magnam, molestiae natus nostrum obcaecati odio possimus qui quibusdam ratione temporibus totam, voluptate!'

            ],
            [
                'id' => 2,
                'title' => 'Listing two',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid beatae cupiditate delectus deleniti dignissimos doloremque hic ipsum magnam, molestiae natus nostrum obcaecati odio possimus qui quibusdam ratione temporibus totam, voluptate!'
            ]
        ]
    ]);
});

//Route::get('/hello', function () {
//    return response('<h1>Hello World!</h1>', 200)->header('Content-Type', 'text/plain')->header('foo', 'bar');
//});
//
//Route::get('/posts/{id}', function ($id) {
//    ddd($id);
//    return response('Post ' . $id);
//})->where('id', '[0-9]+');
//
//Route::get('/search',function (Request $request){
//return $request->ime . ' ' . $request->grad;
//});
