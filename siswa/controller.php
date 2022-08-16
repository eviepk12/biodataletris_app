<?php
session_start();
require '../koneksi.php';

if (isset($_POST['hapus_data_siswa'])) {
    $id_siswa = mysqli_real_escape_string($con, $_POST['hapus_data_siswa']);

    $query = "DELETE FROM siswa WHERE id='$id_siswa'";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['message'] = "Data Siswa Berhasil Dihapus";
        header("Location: index.php");
        exit(0);
    }
    else {
        $_SESSION['message'] = "Data Siswa Gagal Dihapus";
        header("Location: index.php");
        exit(0);
    }
}

if (isset($_POST['ubah_data_siswa'])) {
    $id_siswa = mysqli_real_escape_string($con, $_POST['id_siswa']);
    $nama = mysqli_real_escape_string($con, $_POST['nama']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $no_hp = mysqli_real_escape_string($con, $_POST['no_hp']);
    $id_jurusan = mysqli_real_escape_string($con, $_POST['id_jurusan']);

    $query = "UPDATE siswa SET nama='$nama', email='$email', no_hp='$no_hp', id_jurusan='$id_jurusan' WHERE id='$id_siswa'";
    $query_run = mysqli_query($con, $query);

    if($query_run) {
        $_SESSION['message'] = "Data Siswa Tealh Berhasil Diubah";
        header("Location: index.php");
        exit(0);
    }
    else {
        $_SESSION['message'] = "Data Siswa Gagal Diubah";
        header("Location: index.php");
        exit(0);
    }
}

if (isset($_POST['simpan'])) {
    $nis = mysqli_real_escape_string($con, $_POST['nis']);
    $nama = mysqli_real_escape_string($con, $_POST['nama']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $no_hp = mysqli_real_escape_string($con, $_POST['no_hp']);
    $id_jurusan = mysqli_real_escape_string($con, $_POST['id_jurusan']);

    $query = "INSERT INTO siswa (nis, nama, email, no_hp, id_jurusan) VALUES ('$nis','$nama', '$email', '$no_hp', '$id_jurusan')";

    $query_run = mysqli_query($con, $query);
    if($query_run) {
        $_SESSION['message'] = "Data Siswa Berhasil Disimpan";
        header("Location: tambah_siswa.php");
        exit(0);
    }
    else {
        $_SESSION['message'] = "Data Siswa Gagal Disimpan";
        header("Location: tambah_siswa.php");
        exit(0);
    }
}