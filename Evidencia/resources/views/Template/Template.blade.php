<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Evidencias!</title>
  </head>
  <body>
    <ul class="nav justify-content-center">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{url('http://127.0.0.1:8000/')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('Ejercicio1')}}">Ejercicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('Ejercicio2')}}">Ejercicio2</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="{{route('Ejercicio3')}}">Ejercicio3</a>
        </li>
      </ul>
      <div class="container">
          @yield('plantillaweb')
      </div>
  </body>
</html>