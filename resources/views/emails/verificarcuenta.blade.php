<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificación de cuenta</title>
</head>
<body>
    <h1>Verificación de cuenta de usuario</h1>
    <p>Hola {{$name}}, gracias por registrarte en MyProjectSystem. Por favor verifica tu cuenta en el siguiente enlace:</p>
    <a href="{{ url('api/verify/' . $token) }}">Verificar Cuenta</a>
</body>
</html>
