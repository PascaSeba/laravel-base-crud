@extends('layouts.app')

@section('title', 'Homepage')

@section('content')

<h1>La mia homepage</h1>
<a href="{{ route('vestiti.index') }}">CLICCA QUI PER I VESTITI</a>
<br>
<br>

@endsection