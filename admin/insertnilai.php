<?php
include "koneksiadmin.php";
?>
<html>

 <link rel="stylesheet" href="styleadmin2.css">


<div class="navbar">
  <h3 class="admin">Insert Data Nilai Siswa</h3>
 </div>
 <div class="sidebar">
  <div class="nav"></div>
  <a href=""><button class="btnt"><i style="margin-right: 5px" class="fa fa-home"></i></button><br></a>
  <a href="indexadmin.php"><button class="btn">Dashboard<i style="margin-right: 5px" class="fa fa-book"></i></button><br></a>
  <a href="insertnilai.php"><button class="btn">Insert Nilai Siswa<i style="margin-right: 5px" class="fa fa-list"></i></button><br></a>
  <a href="insertsiswa.php"><button class="btn">Insert Data Siswa<i style="margin-right: 5px" class="fa fa-lock"></i></button><br></a>
  <a href="logoutadmin.php"><button class="btn">Log out<i style="margin-right: 5px" class="fa fa-user"></i></button><br></a>
 </div>
 </div>
 <div id="container">

    <br>
    <center><h1><u>Insert Nilai</u></h1></center>
    <form action="insertnilai_proses.php" method="POST">
    <h3> <a href="../admin/indexadmin.php" name="kembali"> Kembali </a> </h3>
 <fieldset>
 <table width="600" border="0" align="center" cellpadding="10" cellspacing="1">

<tr>
    <td>NIS</td>
    <td>:</td>
    <td><input name="nis" type="text"></td>
</tr>

<tr>
    <td>Nama Siswa</td>
    <td>:</td>
    <td><input name="nama_siswa" type="text"></td>
</tr>

<tr>
    <td>Kode Mata Pelajaran</td>
    <td>:</td>
    <td><input type="text"  name="kd_mapel"></td>
</tr>

<tr>
    <td>Nama Mata Pelajaran</td>
    <td>:</td>
    <td><input type="text"  name="nama_mapel"></td>
</tr>

<tr>
    <td>Nilai Uts</td>
    <td>:</td>
    <td><input type="text"  name="nilai_uts"></td>
</tr>

<tr>
    <td>Nilai Uas </td>
    <td>:</td>
    <td><input name="nilai_uas" type="text"></td>
</tr>




<tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td><input type="submit" name="masukkan" value="Masukkan"></td>
</tr>

</table>
</fieldset>
</form>

</div>

<div class="ferm">
 <form action="insertnilai.php" method="get" >
	<label >Masukan NIS :</label>
	<input type="text" name="cari">
	<input type="submit" value="OK">
</form>
</div>

 <table width='80%' border=1>

   
    <thead><th>No</th><th>NIS</th> <th>NAMA SISWA</th> <th>KODE MATA PELAJARAN</th> <th>NAMA MATA PELAJARAN</th>
        <th>NILAI UTS</th><th>NILAI UAS</th><th>NILAI AKHIR</th><th><th></th></thead>    
    <?php 
    	if(isset($_GET['cari'])){
            $cari = $_GET['cari'];
            $result = mysqli_query($conn,"select * from penilaian  where nis like '%".$cari."%'");				
        }else{
            $result = mysqli_query($conn, "SELECT * FROM penilaian ORDER BY nis DESC");	
    	
        }
    $no=1;
    while($user_data = mysqli_fetch_array($result)){ 
        ?>
    <tr>
        <td><?php echo $no++; ?></td>    
        <td><?php echo $user_data['nis'];?></td>
        <td><?php echo $user_data['nama_siswa'];?></td>
        <td><?php echo $user_data['kd_mapel'];?></td>
        <td><?php echo $user_data['nama_mapel'];?></td> 
        <td><?php echo $user_data['nilai_uts'];?></td>   
        <td><?php echo $user_data['nilai_uas'];?></td>
        <td><?php echo $user_data['hasil_akhir'];?></td>
        <td><a href="../admin/hapus_nilai.php?id=<?php echo $user_data['id']; ?>" name="hapus"> Delete </a></td>
        <td><a href="../admin/updatenilai.php?id=<?php echo $user_data['id']; ?>" name="update"> Update </a></td>
        
       
    <?php } ?>
        
    </table>  
    
    </body>    
 </html>