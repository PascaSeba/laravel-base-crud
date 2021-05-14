@extends('layouts.app')

@section('title', 'Vestiti')

@section('content')

<div class="lista_vestiti">
    <h1>LISTA DEI VESTITI</h1>
    <button class="insert_button"><a class="inserta" href="{{ route('vestiti.create') }}">CLICCA QUI PER INSERIRE UN NUOVO VESTITO</a></button>
    @foreach ($vestiti as $vestito)
    <div class="dress_card">
        <h2>Vestito n° {{ $vestito['id'] }}</h2>
        <p><strong>Nome vestito: </strong> {{ $vestito['name'] }}</p>
        <p><strong>Colore vestito: </strong> {{ $vestito['color'] }}</p>
        <p><strong>Taglia vestito: </strong> {{ $vestito['size'] }}</p>
        <p><strong>Prezzo vestito: </strong> &euro; {{ $vestito['price'] }}</p>
        <br>
        <a class="details" href="{{route('vestiti.show', ['vestiti' => $vestito -> id])}}">CLICCA QUI PER I DETTAGLI</a> {{-- Come tradurre esattamente questa riga? --}}
    </div>
    @endforeach
</div>

@endsection