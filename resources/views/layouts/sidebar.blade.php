@extends('layouts.master')

@section('sidebar')
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{url('CSS/sidebar.css')}}">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Side Navbar</title>
</head>
<body>
    <nav>
        <div class="menu">
            <div class="name">
                <a href="#">
                    Milk Tea Store
                </a>
            </div>
          <ul>
              <li>
                  <a href="{{route('content', ['id' => 1 ])}}">
                      Store 1
                  </a>
              </li>
              <li>
                  <a href="{{route('content', ['id' => 2 ])}}">
                      Store 2
                  </a>
              </li>
              <li>
                  <a href="{{route('content', ['id' => 3 ])}}">
                      Store 3
                  </a>
              </li>
              <li>
                  <a href="{{route('content', ['id' => 4 ])}}">
                      Store 4
                  </a>
              </li>
          </ul>
        </div>
    </nav>

</body>
</html>

@endsection
  