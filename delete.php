<?php 
    include "koneksi.php";
    $id = $_GET['no_mahasiswa'];
    $ambilData = mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE no_mahasiswa='$no_mahasiswa'");
    echo "<meta http-equiv='refresh' content='1;url=http://localhost/web_uniska/data_mahasiswa.php'>";
?>