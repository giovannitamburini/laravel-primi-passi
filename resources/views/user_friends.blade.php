<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>User Friends</h1>

    <ul>
        {{-- ciclo, tramite un foreach, l'array $friends --}}
        @foreach ($friends as $friend)
        
        {{-- singolo amico --}}
        <li>{{$friend}}</li>
        
        {{-- devo chiudere il foreach --}}
        @endforeach

    </ul>

    <br>

    <div>
        <a href="/">torna alla Homepage</a>
    </div>

</body>
</html>