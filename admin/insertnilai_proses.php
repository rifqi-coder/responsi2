<?php
    include 'koneksiadmin.php';

    if(isset($_POST['masukkan'])) {

           
        $nis         = $_POST['nis'];
        $nama        = $_POST['nama_siswa'];
        $kdmapel     = $_POST['kd_mapel'];
        $mapel       = $_POST['nama_mapel'];
        $uts         = $_POST['nilai_uts'];
        $uas         = $_POST['nilai_uas'];
        $hasil       = ($uts + $uas)/2;
        

        $sql = "INSERT INTO penilaian (id,nis,nama_siswa,kd_mapel,nama_mapel,nilai_uts,nilai_uas,hasil_akhir) VALUES
        ('','$nis', '$nama', '$kdmapel','$mapel', '$uts', '$uas', '$hasil')";
$cek = mysqli_query($conn, $sql);

if( $cek ) {
   header('Location: ../admin/insertnilai.php');
} 
else {
   header('Location:../admin/indexadmin.php');
}
}
?>