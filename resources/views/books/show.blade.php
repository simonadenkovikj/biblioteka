<h1>{{$book->name}}</h1>
<h2>ISBN-{{$book->isbn}}</h2>
<h2>Број на страни: {{$book->pages}}</h2>

@if(count($book->pisatel)==1)
    <h2>Автор:<a href="{{ route('avtor.prikazi', $book->pisatel[0]->id) }}">{{$book->pisatel[0]->name}}</h2>
@else
    <h2>Автори:</h2>
    <ul>
        @foreach($book->pisatel as $pisatel)
            <li><a href="{{ route('avtor.prikazi', $pisatel->id) }}">{{$pisatel->name}}</li>
            @endforeach
    </ul>
    @endif