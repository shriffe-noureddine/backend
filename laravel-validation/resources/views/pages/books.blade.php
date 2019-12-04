@extends ('template')
@section ('title','new title')

@section ('content')
<a href="/books/create">Add a new book</a>
@if(count($books) > 0)
@foreach($books as $book)
<hr>
<h2>the book name is: {{$book ->title}}</h1>
  <h3>the author name is: {{$book ->author_id}}</h1>

    <form action="books/{{$book->id}}" method="post">
      @csrf
      @method('delete')
      <input type="submit" value="delete" name="submit">
    </form>
    <a href="/books/{{$book->id}}/edit">Edit</a>
    @endforeach
    @endif


    @endsection