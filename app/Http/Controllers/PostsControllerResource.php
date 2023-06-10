<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsControllerResource extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //This is the method that is called when you go to /post
        // return 'This is the index method inside PostsControllerResource';
        // You can return a view like this that is located in resources\views\post\index.blade.php
        return view('post.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id = 1)
    {
        // This is the method that is called when you go to /post/{id}
        return $id;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
