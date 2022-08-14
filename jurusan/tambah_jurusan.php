<?php
session_start();
?>

<?php include("../includes/header.php");?>

<body>
    <div class="container mt-5">
        <?php  include('message.php') ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4> Tambahkan Jurusan <a href="index.php" class="btn btn-danger float-end">Kembali</a></h4> 
                    </div>
                    <div class="card-body">
                        <form action="controller.php" method="POST">
                        
                        <div class="mb-3">
                            <label>Jurusan</label>
                            <input type="text" name="jurusan" class="form-control">
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