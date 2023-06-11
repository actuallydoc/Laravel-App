<?php

use Illuminate\Support\Facades\Route;
//Import the controller class to use it
use App\Http\Controllers\PostsController;
use App\Http\Controllers\PostsControllerResource;
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
/*
    GET - request a resource
    POST - create a resource
    PUT - update a resource (replace the entire resource)
    PATCH - update a resource (only modify the fields that were supplied and changed)
    DELETE - delete a resource
    OPTIONS - get the supported HTTP methods for a resource
*/

Route::get('/', function () {
    Debugbar::info("Hello World!");
    Debugbar::error("Hello World!");
    Debugbar::warning("Hello World!");
    Debugbar::startMeasure('render','Time for rendering');

    // $name = "Code with Doc";
    // dd(config('services.mailgun.domain'));
    // Example of throwing an exception
    // try {
    //     throw new Exception('Try Message!');
    // } catch(Exception $e)
    // {
    //     Debugbar::addException($e);
    // }
    // This is how you can add params to the view
    // return view('welcome', [
    //     'name' => $name
    // ]);
    return view('welcome');
});
//Register a router /blog then pass in the controller and the method that you want to use inside the controller i have index function
Route::get('/blog',[PostsController::class, 'index'])->name('blog.index');
// GET
Route::get('/article', [PostsControllerResource::class, 'index'])->name('post.index');
Route::get('/post/{id}', [PostsControllerResource::class, 'show'])->where('id', '[0-9]+'); // with ? it means that the id is optional
// Route::get('/post/{id}/{name}', [PostsControllerResource::class, 'show'])->where([
//     'id' => '[0-9]+',
//     'name' => '[a-zA-Z]+'
// ]); // You can chain regex to validate the id and name
Route::get('/post/{id}/{name}', [PostsControllerResource::class, 'show'])->whereNumber('id')->whereAlpha('name'); // You can chain regex to validate the id and name
//You can use regex to validate the id


// POST
Route::post('/post/create', [PostsControllerResource::class, 'create']);
Route::post('/post', [PostsControllerResource::class, 'store']);
// PUT OR PATCH
Route::get('/post/edit/{id}', [PostsControllerResource::class, 'edit']);
Route::patch('/post/{id}', [PostsControllerResource::class, 'update']);
// DELETE
Route::delete('/post/edit/{id}', [PostsControllerResource::class, 'destroy']);
Route::get('/home', 'App\Http\Controllers\HomeController');
//This grabs all the routes that are inside the PostsControllerResource and chains them
Route::resource('post', PostsControllerResource::class); // This is the same as the above routes


// Route::match(['GET', 'POST'], '/post',[PostsControllerResource::class, 'index']);

// Route::any('/post', [PostsControllerResource::class, 'index']); // This is the best

// Return a view
// Route::view('/post', 'post.index', ['name' => 'Code with Doc']);

// Route for invoke method. Just call the controller and it will call the invoke method

Route::get('/', 'App\Http\Controllers\StripeController@index')->name('index');
Route::get('/invoices', 'App\Http\Controllers\InvoiceController@index')->name('invoices');
Route::post('/create', 'App\Http\Controllers\InvoiceController@create')->name('create');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::post('/checkout', 'App\Http\Controllers\StripeController@checkout')->name('checkout');
    Route::get('/success', 'App\Http\Controllers\StripeController@success')->name('success');
});

