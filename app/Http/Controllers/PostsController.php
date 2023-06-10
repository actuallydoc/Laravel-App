<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    //Create methods that return something back
    public function index() {
        return 'This is the index method inside PostsController';
    }
}
