<html>
    <body>
    @foreach($authors as $author)
<li><a href="{{ route('book.show', ['id' => $author->id]) }}">{{$author->avtorName}}</a></li>
</body>
</html>