<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans+Narrow:wght@400;700&family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <title>@yield('title')</title>
</head>
<body>
    {{-- 
        Create il database shop con all'interno una unica tabella dresses (popolatela con dati a piacere) e mapparla con un model Dress.
        Suggerimenti:
        Createvi il layout
        Gestite le rotte
        Ad ogni rotta collegate un metodo che avrete creato nel vostro Controller
        Definite poi il vostro model per recuperare i dati dal DB
        Bonus: una volta completata la struttura potrete dedicarvi alla parte grafica, rifinendo i vostri header footer e main :sorriso:
     --}}


    @include('partials.header')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')


</body>
</html>