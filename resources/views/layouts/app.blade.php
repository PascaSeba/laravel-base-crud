<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- @yield('css') --}}
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