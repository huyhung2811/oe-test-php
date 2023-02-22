<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{url('CSS/sidebar.css')}}">
    <link rel="stylesheet" href="{{url('CSS/content.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="content">
        @yield('content')
    </div>
    <div class="sidebar">
        @yield('sidebar')
    </div>

    <style>
        .sidebar{
            position:absolute;
            left: 0px;
            width: 20%;
            height: 100%;
        }
        .content{
            position:absolute;
            left:20%;
            width: 80%;
            height:100%;
        }
    </style>
</body>
</html>
