@extends('layouts.plantilla')

@section('title', 'home')

@section('content')
<style>
    .container {
        background-color: red;
    }
</style>

      <div class="container mx-auto">
        <h1>Bienvenido a la web</h1>
        <h1 class="text-3xl font-bold underline">
            Hello world!
          </h1>
      </div>

@endsection
