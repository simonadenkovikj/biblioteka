
<html>
<body>
<ul>
    @foreach($knigi as $book)
    <li><a href="{{ route('kniga.prikazi',['id'=>$book->id]) }}">{{$book->name}}</li>
    @endforeach
</ul>
</body>
</html>