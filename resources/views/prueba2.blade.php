<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PERFILES USUARIOS: </h1>

    @foreach($usuarios as $u)
        <p>Nombre: {{ $u -> name }} </p>
        <p>Email: {{ $u -> email }} </p>
    @endforeach
</body>
</html>