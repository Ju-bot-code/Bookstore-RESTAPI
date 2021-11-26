<?php

namespace App\Http\Controllers;

use App\Models\Bookstore;
use Illuminate\Http\Request;

use App\Http\Resources\BooksResource;
use App\Http\Resources\AuthorsResource;

class BookstoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return BooksResource::collection(Bookstore::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $book=Bookstore::create([
            'name'=> $request->input('name'),
            'description'=>$request->input('description'),
            'publication_year'=>$request->input('publication_year')
        ]);
        
        return new BooksResource($book);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bookstore  $bookstore
     * @return \Illuminate\Http\Response
     */
    public function show(Bookstore $bookstore)
    {
        // return new AuthorsResource($bookstore);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bookstore  $bookstore
     * @return \Illuminate\Http\Response
     */
    public function edit(Bookstore $bookstore)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bookstore  $bookstore
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bookstore $bookstore)
    {
        $bookstore->update([
            'name'=>$request->input('name'), 
            'description'=>$request->input('description'), 
            'publication_year'=>$request->input('publication_year') 
        ]);

        return new AuthorsResource($bookstore);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bookstore  $bookstore
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bookstore $bookstore)
    {
        //
    }
}
