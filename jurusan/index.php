<?php 
    session_start();
    require '../koneksi.php';
?>

<?php include ('../includes/header.php') ?>

    <div class="container mt-4">
        <?php include("message.php"); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    
                    <div class="card-header">
                        <h4>Detail Jurusan <a href="tambah_jurusan.php" class="btn btn-primary float-end">Tambah Jurusan</a> </h4>
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Jurusan</th>
                                <th>Action</th>
                            </tr>
                            </thead>

                            <tbody>
                                <?php
                                    $query = "SELECT * FROM jurusan";
                                    $query_run = mysqli_query($con, $query);

                                    if (mysqli_num_rows($query_run) > 0) {
                                        foreach($query_run as $jurusan) {
                                            
                                        
                                            ?>
                                            <tr>
                                                <td><?=$jurusan['id']?></td>
                                                <td><?=$jurusan['jurusan']?></td>

                                                <td>
                                                    <a href="detail_data_jurusan.php?id=<?=$jurusan['id'];?>" class="btn btn-info btn-sm">Detail</a>
                                                    <a href="edit_data_jurusan.php?id=<?=$jurusan['id'];?>" class="btn btn-success btn-sm">Ubah Data</a>
                                                    
                                                    <form action="controller.php" method="POST" class="d-inline">
                                                        <button type="submit" name="hapus_data_jurusan" value="<?=$jurusan['id'];?>" class="btn btn-danger btn-sm">Hapus Data</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        <?php
                                        }
                                    }

                                    else {
                                        echo "<h5>Belum Ada Data Jurusan</h5>";
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include('../includes/footer.php') ?>