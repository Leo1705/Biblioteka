@extends('_layout.cork')
@section('content')
<html>
    <body>
      Детали за авторот:
      <li>{{$author->avtorName}}</li>
      <li>{{$author->biografija}} 
</body>
</html>
@endsection