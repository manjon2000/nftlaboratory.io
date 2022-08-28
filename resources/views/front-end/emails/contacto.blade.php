<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Correo</title>
</head>
<body>
    <h1>{{ $title }}</h1>
    <ul>
        <li><strong>Nombre:</strong> {{ $bodyMessage['name'] }}</li>
        <li><strong>Apellidos:</strong> {{ $bodyMessage['lastName'] }}</li>
        <li><strong>Email:</strong> {{ $bodyMessage['email'] }}</li>
        <li><strong>Telefono:</strong> {{ $bodyMessage['telefono'] }}</li>
        <li><strong>Mensaje:</strong> {{ $bodyMessage['message'] }}</li>
    </ul>
    
</body>
</html>