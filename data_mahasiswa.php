<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.4.1.min.js"></script>
</head>
<body>
    

    <div class="container col-nd-6">
        <div class="card">
            <div class="card-header bg-primary text-white">
                Tabel Data Mahasiswa
            </div>
            <div class="card-body">
                <a href="index.php" class="btn btn-primary">Tambah Data</a> 
                <table class="table table-bordered">
                <tr>
                    <th>NO MAHASISWA</th>
                    <th>NPM</th>
                    <th>NAMA</th>
                    <th>TEMPAT LAHIR</th>
                    <th>TANGGAL LAHIR</th>
                    <th>JENIS KELAMIN</th>
                    <th>ALAMAT</th>
                    <th>KODE POS</th>
                    <th>AKSI</th>
                </tr>
                <?php
                    include "koneksi.php";
                    $no = 1;
                    $tampil = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
                    while($data=mysqli_fetch_array($tampil))
                    {
                ?>
                <tr>
                    <td> <?php echo $no++; ?></td>
                    <td> <?php echo $data['npm']; ?></td>
                    <td> <?php echo $data['nama']; ?></td>
                    <td> <?php echo $data['tempat_lahir']; ?></td>
                    <td> <?php echo $data['tanggal_lahir']; ?></td>
                    <td> <?php echo $data['jenis_kelamin']; ?></td>
                    <td> <?php echo $data['alamat']; ?></td>
                    <td> <?php echo $data['kode_pos']; ?></td>
                    <td>
                        <a href="edit_mahasiswa.php?no_mahasiswa=<?php echo $data['no_mahasiswa']; ?>" class="btn btn-sn btn-warning">EDIT</a>
                        <a href="delete.php?no_mahasiswa=<?php echo $data['no_mahasiswa']; ?>" class="btn btn-sn btn-danger">HAPUS</a>
                    </td>
                </tr>

                <?php } ?>
                </table>   
            </div>
        </div>
    </div>
</body>
</html>