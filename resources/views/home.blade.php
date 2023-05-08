<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{asset('assets/css/home.css')}}">

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 100px;
            padding: 10px;
            background-color: lightblue;
        }

        ul {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        li {
            list-style-type: none;
        }

        a {
            text-decoration: none;
        }
    </style>

</head>
<body>

    <nav id="nav">

        <img src="logo.png" alt="logo">

        <ul>
            @foreach ($linkpages as $link)
            <li><a href="/{{ route($link)}}">{{$link}}</a></li>
                
            @endforeach
        </ul>

    </nav>

    <h1>Homepage</h1>
    <h2>Welcome '{{$nickname}}'</h2>


</body>
</html>