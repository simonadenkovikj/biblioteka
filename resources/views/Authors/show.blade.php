
<h1>{{$author->name}}</h1>
<p>{{$author->biography}}</p>
@if(count($author->kniga)==1)
    <h2>Книга: <a href="{{ route('kniga.prikazi', $author->kniga[0]->id) }}">{{$author->kniga[0]->name}}</a></h2>
@else
    <h2>Книги:</h2>
    <ul>
        @foreach($author->kniga as $kniga)
            <li><a href="{{ route('kniga.prikazi', $author->kniga[0]->id) }}">{{$kniga->name}}</a></li>
            @endforeach
    </ul>
    @endif