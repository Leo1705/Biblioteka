@extends('_layout.cork');
@section('content')
<html>
    <body>
        <ul>

@foreach($authors as $author)
<li><a href="{{ route('book.show', ['id' => $author->id]) }}">{{$author->avtorName}}</a></li>

@endforeach
            <h2>Сите наши достапни книги во моментот:  </h2>
            <br/>
       @foreach ($books as $book)
    <div class="knigja">
       <h3>
        
       <img src="{{ asset('/assets/' . $book->knigjacol) }}" class="knigjaImage"/>

    <br/>     
    <a href="{{ route('book.show', ['id' => $book->id]) }}" class="bookName">{{$book->name}}</a>
    <p class="barCodeBook"> Бар код на книгата: {{$book->barCode}}</p>
    <p class="opisBook">Опис на книгата: {{$book->opisKnigja}}</p>
    
</h3>
<a href="biblioteka-app/public/naracka">Нарачај Книга</a>
</div>
    @endforeach
    <br />
    
   <a href="http://localhost/biblioteka-app/public/korisnici">Vidi koi se site korisnici </a>
    </ul>
    </body>
</html>
<style>
    .knigjaImage{
        width:300px;
        height:300px;
        border-radius:15px;
        padding:20px;
    }
    .bookName{
        font-size:32px;
        font-weight:700;
    }
    .barCodeBook{
        font-size:16px;
    }
    .opisBook{
        font-size:16px;

    }
    .knigja{
        margin:auto;
margin-left:400px;
        border:1px solid white;
padding:50px 20px 50px 20px;
margin-top:20px;
margin-bottom:10px;
border-radius:10px;
text-align:center;
width:40%;

    }

    </style>

@endsection