<?php

# membuat koneksi dengan MySQL server mysqli_connect(host, username, password, dbname, port, socket)
$con = mysqli_connect("localhost", "root", "", "biodataletris_app");

if(!$con) {
    die('koneksi gagal'.mysqli_connect_error());
}

?>