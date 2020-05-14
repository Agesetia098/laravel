<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Tambah Data</title>
  </head>
  <body>
  <div class="container">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/login">Login </a>
      </li>
      
    </ul>
  </div>
  <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
</nav>
</div>
<br>
<br>
<br>
<br>
<br>
        <div class="container">
        <h2 align="center"> Update Data </h2>
        <a href="/login" class="btn btn-outline-danger"> Kembali </a>
        <br>
        <br>
        @foreach($bio as $a)
        <form action="/bio/edit" method="POST">
        {{ csrf_field() }}
        <div class="input-group mb-3">
              <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1" >Nama</span>
                      <input type="hidden" class="form-control" name="id_data" value="{{ $a->id_data }}">
                      <input type="hidden" class="form-control" name="img" value="{{ $a->img }}">
                      <input type="text" class="form-control" name="nama" value="{{ $a->nama }}">
              </div>
        <div class="input-group mb-3">
              <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">Biiioo</span>
              </div>
                      <input type="text" class="form-control" name="biodata" value="{{ $a->biodata }}" Required>
        </div>
      <button type="submit" class="btn btn-outline-success"> Kirim </button> 
  <br>

</form>
 @endforeach
        </div>
</body>
</html>