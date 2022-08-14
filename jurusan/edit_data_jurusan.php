<?php
session_start();
require '../koneksi.php';
?>

<?php include("../includes/header.php")?>

<body>
    <div class="container mt-5">
        <div class="col-md-12">
            <div class="card">
                
                <div class="card-header">
                    <h4>Edit Data Jurusan <a href="index.php" class="btn btn-danger float-end">Kembali</a></h4>
                </div>

                <div class="card-body">
                    <?php 
                        if (isset($_GET['id'])) {
                            $id_jurusan = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM jurusan WHERE id='$id_jurusan'";
                            $query_run = mysqli_query($con, $query);

                            if (mysqli_num_rows($query_run) > 0) {
                                $jurusan = mysqli_fetch_array($query_run);
                                ?>

                                <form action="controller.php" method="POST">
                                    <input type="hidden" name="id_jurusan" value="<?=$jurusan['id']; ?>">

                                    <div class="mb-3">
                                        <label>Jurusan</label>
                                        <input type="text" name="jurusan" value="<?=$jurusan['jurusan'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="ubah_data_jurusan" class="btn btn-primary">Ubah Data Jurusan</button>
                                    </div>

                                </form>
                                <?php
                            }
                            else {
                                echo "<h4> Data Jurusan Tidak Ditemukan </h4>";
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>