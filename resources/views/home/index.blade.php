@extends('layouts.app-master')
@section('content')
    <h1 class="container">Home</h1>
    @auth
        <p>Bienvenido {{auth()->user()->email ?? auth()->user()->username}}, estás autenticado a la página.</p>    
        <p><a href="/logout">Desconectarse</a></p>
    @endauth
    @guest
    <p><a href="/login">Para ver el contenido inicia sesión.</p>
    @endguest
@endsection
    
