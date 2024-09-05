<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Restauración de cuenta</h1>
    <p>Hola {{$name}}, para recuperar tu cuenta da clic en el siguiente enlace:</p>
    <a href="{{ url('api/recover/' . $token) }}">Recuperar mi cuenta</a>
</body>
</html>