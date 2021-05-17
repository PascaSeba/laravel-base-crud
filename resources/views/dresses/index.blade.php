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
        <p><strong>Stagione: </strong> {{ $vestito['season'] }}</p>
        <br>
        <a class="details" href="{{route('vestiti.show', ['vestiti' => $vestito -> id])}}">VISUALIZZA I DETTAGLI</a> {{-- Come tradurre esattamente questa riga? --}}
        <a class="actions details" href="{{route('vestiti.edit', $vestito['id'])}}">MODIFICA I DETTAGLI</a>
        <form action="{{route('vestiti.destroy', $vestito['id'])}}" method="POST">
            @csrf
            @method('DELETE')
            <button class="delete" type="submit">ELIMINA IL VESTITO</button>
        </form>
    </div>
    @endforeach
</div>

@endsection