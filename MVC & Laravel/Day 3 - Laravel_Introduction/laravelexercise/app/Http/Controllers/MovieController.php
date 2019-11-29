<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'This is list of all the movies';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Raw Queries
        DB::insert('INSERT INTO movies(title) 
        VALUES(?)', [$request->title]);

        return 'Form was submitted : ' . $request->title;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $movie = DB::select('SELECT * FROM movies WHERE movie_id = ?', [$id]);

        return view('moviedetail', ['movie' => $movie[0]]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $movie = DB::select('SELECT * FROM movies WHERE movie_id = ?', [$id]);
        // SHOW THE FORM 
        return view('edit-form', ["movie" => $movie[0]]);
    }

    public function update(Request $request, $id)
    {
        DB::update('UPDATE movies SET title = ? 
        WHERE movie_id = ?', [$request->title, $id]);

        return redirect('movies/edit/' . $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
