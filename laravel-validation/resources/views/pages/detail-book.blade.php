Title : {{ $book->title}}<br>
Author name : {{ $book->author->name }}<br>
Author date of birth : {{ $book->author->date_of_birth }}<br>
Comments: <br>
@foreach ($book->comments as $comment)
{{$comment->message}}<br>
@endforeach

<form action="" method="post">
@csrf
<input type="hidden" name="username" value="xxx">
<input type="hidden" name="book_id" value="{{$book->id}}">
<textarea name="comment" id="" cols="30" rows="10"></textarea><br>
<input type="submit" name="submit" value="submit">
</form>


