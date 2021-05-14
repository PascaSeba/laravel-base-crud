@extends('layouts.app')

@section('title', 'Homepage')

@section('content')

<div class="homepage">
    <h1>HOMEPAGE</h1>
    <p>Clicca sul seguente bottone per visualizzare i vestiti:</p>
    <button><a href="{{ route('vestiti.index') }}">VISUALIZZA I VESTITI</a></button>
</div>

@endsection