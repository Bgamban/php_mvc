<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman <?=$data['judul']; ?></title>
    <!--bootstrap ini memanggil yang online apabila ingin menggunakan yang download arahkan hrefnya ke file tersebut-->
    <!--contoh: http://localhost/php_mvc/public/css/bootsrap.css--> <!--http hingga public hapus dan ganti dengan: BASEURL DIDLAM PHP ECHO-->
    <link rel="stylesheet" href="<?=BASEURL;?>/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
  <a class="navbar-brand" href="<?=BASEURL; ?>">PHP_MVC</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="<?=BASEURL; ?>">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=BASEURL; ?>/mahasiswa">Mahasiswa</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=BASEURL; ?>/about">About</a>
      </li>
    </ul>
  </div>
  </div>
</nav>
