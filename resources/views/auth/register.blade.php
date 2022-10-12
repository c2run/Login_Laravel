@extends('layouts.auth-master')
@section('content')

    <form action="/register" method="POST">
        @csrf
        <h1>Registrarse</h1>
        @include('layouts.partials.messages')
    <div class="form-floating mb-3">
        <input type="email" name="email" class="form-control" id="floatingInput" placeholder="email">
        <label for="exampleInputEmail1" class="form-label">Email</label>
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="form-floating mb-3">
            <input type="text" name="username" class="form-control" id="floatingInput" placeholder="username">
            <label for="exampleInputPassword1" class="form-label">Username</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="password">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword1" placeholder="password confirmation">
                <label for="exampleInputPassword1" class="form-label">Password confirmation</label>
                </div>
        <div class="mb-3">
        <a href="/login">Iniciar sesión</a>
        </div>
        <button type="submit" class="btn btn-primary">Registrarse</button>
@endsection