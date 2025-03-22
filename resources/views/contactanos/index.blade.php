@extends('layouts.plantilla')
@section('title', 'Contactanos')
@section('content')
    <h1>Dejanos un mensaje</h1>
    <form action="{{route('contactanos.store')}}" method="POST">
        
        @csrf

        <label>
            Nombre:<br>
            <input type="text" name="name" value="{{old('name')}}">
        </label>
        <br>
        @error('name')
            <span>*{{$message}}</span>
        @enderror
        <br>

        <label>
            Correo:<br>
            <input type="text" name="correo" value="{{old('correo')}}">
        </label>
        <br>
        @error('correo')
            <span>*{{$message}}</span>
        @enderror
        <br>

        <label>
            Mensaje:<br>
            <textarea name="mensaje" id="" cols="30" rows="10">{{old('mensaje')}}</textarea>
        </label>
        <br>
        @error('mensaje')
            <span>*{{$message}}</span>
        @enderror
        <br>

        <button type="submmit">Enviar Mensaje</button>
    </form>

    @if (session('info'))
        <script>alert('{{session('info')}}')</script>
    @endif

@endsection