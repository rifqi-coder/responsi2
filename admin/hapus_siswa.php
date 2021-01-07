<?php
    include 'koneksiadmin.php';

        $nis= $_GET['nis'];
   

        $sql = "DELETE FROM data_siswa where nis='$nis'";
        $cek = mysqli_query($conn, $sql);

            header('Location:../admin/insertsiswa.php');
        
?>