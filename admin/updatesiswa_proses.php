<?php
    include 'koneksiadmin.php';

    $nis         = $_POST['nis'];
    $nama        = $_POST['nama_siswa'];
    $jk          = $_POST['jk'];
    $alamat      = $_POST['alamat'];
    $ttl         = $_POST['ttl'];
    $ayah        = $_POST['nama_ayah'];
    $ibu         = $_POST['nama_ibu'];

    mysqli_query($conn,"UPDATE data_siswa SET nama_siswa='$nama',jk='$jk', alamat='$alamat', ttl='$ttl', nama_ayah='$ayah', nama_ibu='$ibu' 
            WHERE nis='$nis'");
    
    header('Location: ../admin/insertsiswa.php');
?>