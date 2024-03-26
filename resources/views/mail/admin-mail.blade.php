<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Siamo stati contattati</h1>
    <p>L'Utente {{$contUser['name']}}</p>
    <p>Ci ha inserito un messaggio:</p>
    <p>{{$contUser ['message']}}</p>
    <p>Per ricontattarlo questa è la sua mail : {{$contUser['email']}}</p>
</body>
</html>