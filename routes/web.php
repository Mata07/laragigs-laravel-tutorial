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

// default route
// Route::get('/', function () {
//     return view('welcome');
// });

// // vježba rute
// Route::get('/hello', function () {
//     return 'Hello world';
// });

// vraća response sa text/html
// Route::get('/hello', function () {
//     return response('<h1>Hello world</h1>');
// });

// vraća response sa text/html, ali ga pretvara u plain sa headers(->)
// Route::get('/hello', function () {
//     return response('<h1>Hello world</h1>')
//         ->header('Content-Type', 'text/plain')  // pretvara u text/plain
//         ->header('foo', 'bar');                 // dodaje foo bar header
// });


// rute sa wildcards {}
// http://localhost:8000/posts/10
// Route::get('/posts/{id}', function ($id) {
//     return response('Post ' . $id);         //ispiše Post 10
// })->where('id', '[0-9]+');      // constraint sa RegEx - samo brojevi


// Route::get('/posts/{id}', function ($id) {
//     //dd($id);                           // die and dump - debug helperi - pokaže id
//     // ddd($id);    // ne radi - prošireni debug view
//     return response('Post ' . $id);         //ispiše Post 10
// })->where('id', '[0-9]+');      // constraint sa RegEx - samo brojevi


// search route/query string primjer
// http://localhost:8000/search?name=Brad&city=Boston
// Route::get('/search', function (Request $request) {
//     return $request->name . ' ' . $request->city;
// });


// nova home ruta
Route::get('/', function () {
    return view('listings');
});




