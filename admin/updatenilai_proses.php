<?php
    include 'koneksiadmin.php';

    $id          = $_POST['id'];
    $nis         = $_POST['nis'];
    $nama        = $_POST['nama_siswa'];
    $kdmapel     = $_POST['kd_mapel'];
    $mapel       = $_POST['nama_mapel'];
    $uts         = $_POST['nilai_uts'];
    $uas         = $_POST['nilai_uas'];
    $hasil       = ($uts + $uas)/2;



    mysqli_query($conn,"UPDATE penilaian SET nis='$nis', nama_siswa='$nama', kd_mapel='$kdmapel', nama_mapel='$mapel', nilai_uts='$uts', nilai_uas='$uas', hasil_akhir='$hasil' WHERE id='$id'");
         
    header('Location: ../admin/insertnilai.php');
    
?>