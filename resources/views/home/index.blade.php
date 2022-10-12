<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <h1>Home</h1>
    @auth
        <p>Bienvenido {{auth()->user()->email ?? auth()->user()->username}}, estás autenticado a la página.</p>    
        <p><a href="/logout">Desconectarse</a></p>
        @endauth
    @guest
        <p><a href="/login">Para ver el contenido inicia sesión.</p>
    @endguest
</body>
</html>