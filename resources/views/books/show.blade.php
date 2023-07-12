<html>
    <body>
        <h2>Детали за книгата</h2>
        <li>Име: {{$book->name}}</li>
        <li>Бар код: {{$book->barCode}} </li>
       <li>{{$book->status->status}} </li>
       @foreach($book->avtor as $avtor)
       <li> <a href="{{ route('author.show', ['id' => $book->id]) }}">{{$avtor->avtorName}}</a></li>
     @endforeach
             <button><a href="http://localhost/biblioteka-app/public/">Врати се во библиотеката</a></button>
</body>
    </html>