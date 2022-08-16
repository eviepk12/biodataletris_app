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
                        <h4>Detail Siswa                         
                        <a href="../index.php" class="btn btn-danger float-end m-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16"> <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z"/></svg>
                        </a>
                        <a href="tambah_siswa.php" class="btn btn-primary float-end m-1">Tambah Data Siswa</a>
                        </h4>
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>NIS</th>
                                <th>ID</th>
                                <th>Nama Siswa</th>
                                <th>Email</th>
                                <th>Nomer Telpon</th>
                                <th>Jurusan</th>
                                <th>Action</th>
                            </tr>
                            </thead>

                            <tbody>
                                <?php
                                    $query = "SELECT 
                                                siswa.id AS id_siswa,
                                                siswa.nis AS nis_siswa,
                                                siswa.nama AS nama_siswa, 
                                                siswa.email AS email_siswa, 
                                                siswa.no_hp AS no_hp_siswa,
                                                jurusan.jurusan AS nama_jurusan
                                              FROM siswa, jurusan WHERE jurusan.id = siswa.id_jurusan";
                                    $query_run = mysqli_query($con, $query);

                                    if (mysqli_num_rows($query_run) > 0) {
                                        foreach($query_run as $siswa) {
                                            
                                        
                                            ?>
                                            <tr>
                                                <td><?=$siswa['nis_siswa']?></td>
                                                <td><?=$siswa['id_siswa']?></td>
                                                <td><?=$siswa['nama_siswa']?></td>
                                                <td><?=$siswa['email_siswa']?></td>
                                                <td><?=$siswa['no_hp_siswa']?></td>
                                                <td><?=$siswa['nama_jurusan']?></td>

                                                <td>
                                                    <a href="detail_data_siswa.php?id=<?=$siswa['id_siswa'];?>" class="btn btn-info btn-sm">Detail</a>
                                                    <a href="edit_data_siswa.php?id=<?=$siswa['id_siswa'];?>" class="btn btn-success btn-sm">Ubah Data</a>
                                                    
                                                    <form action="controller.php" method="POST" class="d-inline">
                                                        <button type="submit" name="hapus_data_siswa" value="<?=$siswa['id_siswa'];?>" class="btn btn-danger btn-sm">Hapus Data</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        <?php
                                        }
                                    }

                                    else {
                                        echo "<h5>Belum Ada Data Siswa</h5>";
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