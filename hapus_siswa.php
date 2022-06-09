<?php
    include 'koneksi.php';
    $id_siswa = $_GET['id_siswa'];
    mysqli_query($koneksi, "DELETE FROM siswa WHERE id_siswa = $id_siswa");
    header ("location:index.php");
?>