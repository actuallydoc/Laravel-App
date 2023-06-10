<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Magic method that is called when you go to /
   public function __invoke() {
    return view('post.index');
   }
}
