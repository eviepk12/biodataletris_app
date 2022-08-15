<?php
session_start();
require 'koneksi.php';
?>

<?php 
include("includes/header.php");
?>

<header class="py-5 bg-image-full" style="background: rgb(131,58,180); background: linear-gradient(90deg, rgba(131,58,180,1) 0%, rgba(253,29,29,1) 50%, rgba(252,176,69,1) 100%);">
    <div class="text-center my-5">
        <img class="img-fluid rounded-circle mb-4" style="width: 15hv;" src="includes/logo.png" alt="Logo letris" />
        <h1 class="text-white fs-3 fw-bolder">BioData Siswa Letris 2</h1>
        <p class="text-white-50 mb-0">Sebuah Project Kelompok</p>
    </div>
</header>

<div class="row">
  <div class="text-center">
    <a href="siswa/index.php" class="btn btn-primary btn-lg mt-5">Lihat Data Siswa</a>
    <a href="jurusan/index.php" class="btn btn-danger  btn-lg mt-5">Lihat Data Jurusan</a>
  </div>
</div>