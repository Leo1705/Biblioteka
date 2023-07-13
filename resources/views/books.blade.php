@extends('_layout.cork');
@section('content')
<html>
    <body>
        <ul>

@foreach($authors as $author)
<li><a href="{{ route('book.show', ['id' => $author->id]) }}">{{$author->avtorName}}</a></li>

@endforeach
            <h2>Eve gi moite knigi : </h2>
       @foreach ($books as $book)
    <li>
        
    <a href="{{ route('book.show', ['id' => $book->id]) }}">{{$book->name}}</a>
    </li>
    @endforeach
    <br />
    
   <a href="http://localhost/biblioteka-app/public/korisnici">Vidi koi se site korisnici </a>
    </ul>
    </body>
</html>
@endsection