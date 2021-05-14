@extends('layouts.app')

@section('title', 'Vestiti')

@section('content')

<h1>Lista dei nostri vestiti</h1>
<a href="{{ route('vestiti.create') }}">Clicca qui per inserire un nuovo vestito</a>
@foreach ($vestiti as $vestito)
    <h2>Vestito n° {{ $vestito['id'] }}</h2>
    <p><strong>Nome vestito: </strong> {{ $vestito['name'] }}</p>
    <p><strong>Colore vestito: </strong> {{ $vestito['color'] }}</p>
    <p><strong>Taglia vestito: </strong> {{ $vestito['size'] }}</p>
    <p><strong>Prezzo vestito: </strong> &euro; {{ $vestito['price'] }}</p>
    <br>
    <a href="{{route('vestiti.show', ['vestiti' => $vestito -> id])}}">GUARDA I DETTAGLI</a> {{-- Come tradurre esattamente questa riga? --}}
    <hr>
@endforeach

@endsection