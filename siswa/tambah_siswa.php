<?php
session_start();
require '../koneksi.php';
?>

<?php include ('../includes/header.php') ?>


<body>
    <div class="container mt-5">
        <?php  include('message.php') ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4> Tambahkan Siswa <a href="index.php" class="btn btn-danger float-end">Kembali</a></h4> 
                    </div>
                    <div class="card-body">
                        <form action="controller.php" method="POST">

                        <div class="mb-3">
                            <label>NIS</label>
                            <input type="text" name="nis" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Nama Siswa</label>
                            <input type="text" name="nama" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Email Siswa</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Nomor Handphone</label>
                            <input type="text" name="no_hp" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Jurusan</label>
                            <select class="form-control" name="id_jurusan">
                            
                            <?php
                                    $query = "SELECT * FROM jurusan";
                                    $query_run = mysqli_query($con, $query);

                                    if (mysqli_num_rows($query_run) > 0) {
                                        foreach($query_run as $jurusan) {
                            ?>

                                <option value="<?=$jurusan['id']?>"><?=$jurusan['jurusan']?></option>
                            
                            <?php
                                        }
                                    }
                                    else {
                                        echo "<h5>Belum Ada Data Jurusan</h5>";
                                    }
                            ?>
                            
                            </select>
                        </div>
                        <div class="mb-3">
                            <button type="submit" name="simpan" class="btn btn-primary">Simpan Data</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script></body>
</body>
</html>