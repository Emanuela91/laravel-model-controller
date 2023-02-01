{{-- contiene il main-layout dove c'è la parte html in cui vegono disposte le varie parti della pagina --}}
@extends('layouts.main-layout')

{{-- contenuto che va all'interno di main-layout, di solito in body --}}
@section('content')
<h1>My Movies</h1>
<div>
    <ul>
        {{-- faccio un foreach per prendere le singole variabili e stamparle a schermo --}}
        @foreach ($movies as $movie)
        <li>{{$movie['id']}}
            {{$movie['title']}}, 
            {{$movie['original_title']}},
            {{$movie['nationality']}},
            {{$movie['date']}},
            {{$movie['vote']}}  
        </li>            
        @endforeach
    </ul>
    {{-- richiamo il database che viene stampato a schermo come array
    {{$movies}} --}}
</div>
@endsection