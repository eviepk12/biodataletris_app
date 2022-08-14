<?php
session_start();
require '../koneksi.php';

if (isset($_POST['hapus_data_jurusan'])) {
    $id_jurusan = mysqli_real_escape_string($con, $_POST['hapus_data_jurusan']);

    $query = "DELETE FROM jurusan WHERE id='$id_jurusan'";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['message'] = "Data Jurusan Berhasil Dihapus";
        header("Location: index.php");
        exit(0);
    }
    else {
        $_SESSION['message'] = "Data Jurusan Gagal Dihapus";
        header("Location: index.php");
        exit(0);
    }
}

if (isset($_POST['ubah_data_jurusan'])) {
    $id_jurusan = mysqli_real_escape_string($con, $_POST['id_jurusan']);
    $jurusan = mysqli_real_escape_string($con, $_POST['jurusan']);

    $query = "UPDATE jurusan SET jurusan='$jurusan' WHERE id='$id_jurusan'";
    $query_run = mysqli_query($con, $query);

    if($query_run) {
        $_SESSION['message'] = "Data Jurusan Telah Berhasil Diubah";
        header("Location: index.php");
        exit(0);
    }
    else {
        $_SESSION['message'] = "Data Jurusan Gagal Diubah";
        header("Location: index.php");
        exit(0);
    }
}

if (isset($_POST['simpan'])) {
    $jurusan = mysqli_real_escape_string($con, $_POST['jurusan']);

    $query = "INSERT INTO jurusan (jurusan) VALUES ('$jurusan')";

    $query_run = mysqli_query($con, $query);
    if($query_run) {
        $_SESSION['message'] = "Data Jurusan Berhasil Disimpan";
        header("Location: tambah_jurusan.php");
        exit(0);
    }
    else {
        $_SESSION['message'] = "Data Jurusan Gagal Disimpan";
        header("Location: tambah_jurusan.php");
        exit(0);
    }
}