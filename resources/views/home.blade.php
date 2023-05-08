<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{asset('/css/home.css')}}">

</head>
<body>

    <nav id="nav">

        <img src="logo.png" alt="logo">

        <ul>
            @foreach ($linkpages as $link)
            <li><a href="{{ route($link)}}">{{str_replace('_', ' ', $link)}}</a></li>
            @endforeach
        </ul>

    </nav>

    <h1>Homepage</h1>
    <h2>Welcome '{{$nickname}}'</h2>


</body>
</html>