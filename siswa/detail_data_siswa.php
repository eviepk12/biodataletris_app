<?php
require '../koneksi.php';
?>

<?php include ('../includes/header.php') ?>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-header">
                        <h4>Detail Data Siswa <a href="index.php" class="btn btn-danger float-end">Kembali</a> </h4>
                    </div>
                
                    <div class="card-body">
                        <?php 
                            if (isset($_GET['id'])) {
                                $id_siswa = mysqli_real_escape_string($con, $_GET['id']);
                                $query = "SELECT 
                                    siswa.id AS id_siswa, 
                                    siswa.nama AS nama_siswa, 
                                    siswa.email AS email_siswa, 
                                    siswa.no_hp AS no_hp_siswa,
                                    jurusan.jurusan AS nama_jurusan
                                    FROM siswa, jurusan WHERE jurusan.id = siswa.id_jurusan";
                                $query_run = mysqli_query($con, $query);

                                if (mysqli_num_rows($query_run) > 0) {
                                    $siswa = mysqli_fetch_array($query_run);
                                    ?>
                                        <div class="mb-3">
                                            <label>Nama Siswa</label>
                                            <p class="form-control">
                                                <?=$siswa['nama_siswa'];?>
                                            </p>
                                        </div>
                                        <div class="mb-3">
                                            <label>Email Siswa</label>
                                            <p class="form-control">
                                                <?=$siswa['email_siswa'];?>
                                            </p>
                                        </div>
                                        <div class="mb-3">
                                            <label>Nomor Handphone</label>
                                            <p class="form-control">
                                                <?=$siswa['no_hp_siswa'];?>
                                            </p>
                                        </div>
                                        <div class="mb-3">
                                            <label>Jurusan</label>
                                            <p class="form-control">
                                                <?=$siswa['nama_jurusan'];?>
                                            </p>
                                        </div>
                                    
                                    <?php
                                }
                                else {
                                    echo "<h4> Data Siswa Tidak Ditemukan </h4>";
                                }
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>

</html>