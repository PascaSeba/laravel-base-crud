@extends('layouts.app')

@section('title', 'Inserimento nuovo vestito')

@section('content')
    <div class="form_container">
        <form action="{{route('vestiti.update', $vestiti->id)}}" method="post">
            @csrf
            @method('PUT')
            <h1>EDIT SECTION</h1>
            <div class="form-group">
            <label for="name">NOME: </label>
            <input type="text" name="name" id="name" value="{{$vestiti->name}}">
            </div>
            <div class="form-group">
                <label for="Color">COLORE: </label>
                <input type="text" name="color" id="color" value="{{$vestiti->color}}">
            </div>
            <div class="form-group">
                <label for="Size">TAGLIA: </label>
                <input type="text" name="size" id="size" value="{{$vestiti->size}}">
            </div>
            <div class="form-group">
                <label for="price">PREZZO: </label>
                <input type="number" name="price" id="price" value="{{$vestiti->price}}"> {{-- //la parte importante è il name, l'id serve solo per css in questo caso o cose così --}}
            </div>
            <div class="form-group">
                <label for="description">DESCRIZIONE: </label>
                <input type="text" name="description" id="description" value="{{$vestiti->description}}">
            </div>
            <div class="form-group">
                <label for="season">STAGIONE: </label>
                <select name="season" id="season">
                    <option value="">--- Seleziona ---</option>
                    <option value="estivo" {{ $vestiti->season == "estivo" ? 'selected' : ''}} >Estivo</option> {{-- Selected ti permette di far comparire ciò che è selezionato --}}
                    <option value="primaverile" {{ $vestiti->season == "primaverile" ? 'selected' : ''}}>Primaverile</option>
                    <option value="autunnale" {{ $vestiti->season == "autunnale" ? 'selected' : ''}}>Autunnale</option>
                    <option value="invernale" {{ $vestiti->season == "invernale" ? 'selected' : ''}}>Invernale</option>
                </select>
            </div>
            <button type="submit">INVIA</button> {{-- //tramite che cosa il submit mi porta sullo store? Forse per la rotta che ho dato al form su--}}
        </form>
    </div>

@endsection