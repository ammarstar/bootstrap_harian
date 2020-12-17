<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="Shortcut icon" href="images/Portal-Informasi.png">
    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/Portal-Informasi.png" height="300px" width="100%" alt="">
        </div>
      </div>

      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a href="index.php" class="navbar-brand">Informasi Harian</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#ikonkecil">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="ikonkecil">
          <div class="navbar-nav mr-auto">
            <li class="nav-item"><a href="index.php" class="nav-link">Beranda</a> </li>
            <li class="nav-item"><a href="tentang.php" class="nav-link">Tentang Saya</a> </li>
            <li class="nav-item active"><a href="kontak.php" class="nav-link">Kontak Kami</a> </li>
          </div>
        </div>
      </nav>
      <br>

      <div class="row">
        <div class="col-md-8">
          <div class="form-group">
            <label for="nama">Nama Lengkap</label>
            <input type="text" name="" class="form-control" id="nama">
            <label for="email">Email</label>
            <input type="text" name="" class="form-control" id="email">
            <label for="nomer">No. Telp</label>
            <input type="text" name="" class="form-control" id="nomer">
            <label for="pesan">Pesan</label>
            <textarea name="name" rows="8" cols="80" class="form-control" id="pesan" style="resize:none"></textarea>
            <br>
            <button type="submit" name="button" class="btn btn-primary">Simpan</button>
          </div>
        </div>
        <div class="col-md-4">
          <ul class="list-group ">
            <li class="list-group-item list-group-item-danger" >Posting Teratas</li>
            <a href="posting1.php"> <li class="list-group-item">3 Negara dengan Internet ..............</li></a>
            <a href="posting2.php"> <li class="list-group-item">Dampak Positif dari kecan .............</li></a>
          </ul>
        </div>
      </div>



    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>
