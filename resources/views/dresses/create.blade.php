@extends('layouts.app')

@section('title', 'Inserimento nuovo vestito')

@section('content')

<form action="{{ route('vestiti.store') }}" method="post">

    @csrf
    @method('POST')

    <div class="form-group">
      <label for="name">Nome</label>
      <input type="text" name="name" id="name">
    </div>
    <div class="form-group">
        <label for="Color">Color</label>
        <input type="text" name="color" id="color">
    </div>
    <div class="form-group">
        <label for="Size">Size</label>
        <input type="text" name="size" id="size">
    </div>
    <div class="form-group">
        <label for="price">Price</label>
        <input type="text" name="price" id="price"> {{-- //la parte importante è il name, l'id serve solo per css in questo caso o cose così --}}
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <input type="text" name="description" id="description">
    </div>
    <button type="submit">Submit</button> {{-- //tramite che cosa il submit mi porta sullo store? Forse per la rotta che ho dato al form su--}}
  </form>

@endsection