<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use \App\Book;
use \App\Comment;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all();
        return view('pages.books', ['books' => $books]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.new-book');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = $request->validate([
            'title' => 'required|min:2|max:20',
            'price' => 'required'
        ]);

        $book = new Book;
        $book->title = $request->title;
        $book->price = $request->price;

        $book->save();
        return $request->title . 'was inserted';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = Book::find($id);
        // echo "<pre> var_dump($book) </pre>";
        return view('pages.detail-book', ['book' => $book]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $book = Book::find($id);
        return view('pages.edit-book', ['book' => $book]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $book = Book::find($id);
        $book->title = $request->title;
        $book->save();
        return "Book updated";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::destroy($id);
        return 'book was deleted' . $book;
    }

    public function postMessage(Request $request)
    {
        $validation = $request->validate([
            'comment' => 'required|min:2|max:20'
        ]);
            if($validation){

                $comment = new Comment;
                $comment->message = $request->comment;
                $comment->username = $request->username;
                $comment->book_id = $request->book_id;
            }

        $comment->save();
        return $request->comment . 'was inserted';
    }
}
