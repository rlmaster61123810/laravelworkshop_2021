<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titel','My website')</title>
    {{-- bootaps 5.0.2 cdn --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    {{-- font promt --}}
    <link href="https://fonts.googleapis.com/css?family=Prompt&display=swap" rel="stylesheet">
    {{-- font awesome --}}
    <style>
        @import url('https://fonts.googleapis.com/css?family=Prompt&display=swap');
        @font-face {
        font-family: Muli-Bold;
        src: url('/fonts/Muli-Bold.tff');
        }
        </style>

</head>

<body >

    <div class="container">
        {{-- navbar with home and create menu --}}
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">website</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">หน้าแรก <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">เกี่ยวกับ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">ติดต่อ</a>
                </ul>

            </div>
        </nav>
        @yield("content")
                <hr>
                &copy; 2021 by Nontawat
    </div>

</body>

</html>
