@extends('layouts.app')

@section('title', 'Dettagli')

@section('content')

<h1>Dettaglio del singolo vestito</h1>
<h2>L' ID di questo vestito è: <i>{{ $vestito['id'] }}</i></h2>

@endsection