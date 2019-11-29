@extends('layouts.booktemplate')

@section('title', 'book template')

@section('books')
<p>Inside the content section</p>
@if(count($books))
<ul>
  @foreach($books as $book)
  <li>Name : {{$book}}</li>
  @endforeach
</ul>
@endif
@endsection