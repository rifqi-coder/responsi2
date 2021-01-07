<?php
    include 'koneksiadmin.php';

    if(isset($_POST['masukkan'])) {


        $nis         = $_POST['nis'];
        $nama        = $_POST['nama_siswa'];
        $jk          = $_POST['jk'];
        $alamat      = $_POST['alamat'];
        $ttl         = $_POST['ttl'];
        $ayah        = $_POST['nama_ayah'];
        $ibu         = $_POST['nama_ibu'];
        

        $sql = "INSERT INTO data_siswa (nis,nama_siswa,jk,alamat,ttl,nama_ayah,nama_ibu) VALUES
                 ('$nis', '$nama', '$jk','$alamat', '$ttl', '$ayah', '$ibu')";
        $cek = mysqli_query($conn, $sql);

        if( $cek ) {
            header('Location:../admin/insertsiswa.php');
        } 
        else {
 
            header('Location: ../admin/indexadmin.php');

        }
    }
?>