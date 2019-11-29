@extends('layouts.mytemplate')

@section('title', 'My Example Page')

@section('content')
<p>Inside the content section</p>
@if(count($students))
<ul>
  @foreach($students as $student)
  <li>Name : {{$student}}</li>
  @endforeach
</ul>
@endif
@endsection