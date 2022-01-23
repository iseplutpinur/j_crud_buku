<?php
require './config/koneksi.php';
cek_login();
?>
<html lang="id">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>CRUD Data Buku</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- bootstrap template -->

  <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="./index.php">CRUD Data Buku</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link active" href="./index.php">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="./penulis.php">Penulis</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="./penerbit.php">Penerbit</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="./buku.php">Buku</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./logout.php">Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <main class="container my-3">
    <div class="card">
      <h5 class="card-header">CRUD Data Buku</h5>
      <div class="card-body">
        <h5 class="card-title">Aplikasi pengelolaan data buku</h5>
        <p class="card-text">Aplikasi ini dibuat untuk Ujian akhir semester Mata kuliah pemrograman web I, Dalam aplikasi ini terdapat fitur authentikasi, dan beberapa tabel diantaranya tabel Administrator, Penulis, Penerbit Dan tabel buku.</p>
        <p class="card-text">Aplikasi ini dibuat oleh:</p>
        <p class="card-text my-0 py-0">Norbertus Tenau</p>
        <p class="card-text my-0 py-0">2113201019</p>
      </div>
    </div>
  </main>

  <div class="footer bg-dark text-light py-3 mt-3">
    <div class="container">
      <p class="m-0">Copyright &copy 2022 | Norbertus Tenau (2113201019)</p>
    </div>
  </div>

  <script src="./bootstrap/jquery-3.6.0.js"></script>
  <script src="./bootstrap/js/bootstrap.min.js"></script>
</body>

</html>