<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>User Profile</h1>

    <div><strong>Utente: </strong>{{$nickname}}</div>

    <ul>
        <li><strong>Nome: </strong>{{$name}}</li>
        <li><strong>Cognome: </strong>{{$surname}}</li>
        <li><strong>Età: </strong>{{$age}}</li>
        <li><strong>Email: </strong>{{$email}}</li>

    </ul>

</body>
</html>