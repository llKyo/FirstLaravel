<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="{{ action('MainController@index')}}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{action('MainController@create')}}">Crear</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <div class="container pt-5">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
          <table class="table">
            <thead>
              <tr>
                <th>Id</th><th>Nombre</th><th>Cantidad</th>
              </tr>
            </thead>
            <tbody>
              @foreach($discos as $disco)
                <tr>
                  <td>{{$disco->id}}</td>
                  <td>{{$disco->nombre}}</td>
                  <td>{{$disco->cantidad_canciones}}</td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>

  </body>
</html>
