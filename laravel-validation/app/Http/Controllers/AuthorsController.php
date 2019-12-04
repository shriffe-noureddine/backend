<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;

class AuthorsController extends Controller
{
    public function index()
    {
        $authors = Author::all();
        return view('pages.all-authors', ['authors' => $authors]);
    }

    // Show one specific author
    public function show($id)
    {
        $author = Author::find($id);
        $books = $author->books;

        return $books[0]->title;
    }

    // Create a new author
    public function store(Request $request)
    {
        // Create a new Author
        $newAuthor = new Author;
        $newAuthor->name = $request->name;
        $newAuthor->date_of_birth = $request->date_of_birth;
        $newAuthor->gender = $request->gender;

        // Save author in DB
        $newAuthor->save();
    }

    // Update an existing author
    public function update(Request $request, $id)
    {
        $author = Author::find($id);
        $author->name = "New Author's Name";

        $author->save();
    }

    /*public function example()
    {
        $author = Author::where('gender', 'women')->orderBy('name')->get();
        $author->name = "New Author's Name";

        $author->save();
    }*/

    public function destroy($id)
    {
        /*$author = Author::find($id);
        $author->delete();*/
        Author::destroy($id);
    }
}
