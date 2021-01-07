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
    <center><h1><u>Insert Siswa</u></h1></center>
    <form action="insertsiswa_proses.php" method="POST">
    <h3> <a href="../indexadmin.php" name="kembali"> Kembali </a> </h3>
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
    <td>Jenis Kelamin </td>
    <td>:</td>
    <td><input name="jk" type="radio" value="L">Laki-laki
    <input name="jk" type="radio" value="P">Perempuan</td>
</tr>

<tr>
    <td>Alamat</td>
    <td>:</td>
    <td><input type="text"  name="alamat"></td>
</tr>

<tr>
    <td>Tanggal Lahir</td>
    <td>:</td>
    <td><input type="text"  name="ttl"></td>
</tr>


<tr>
    <td>Nama Ayah</td>
    <td>:</td>
    <td><input name="nama_ayah" type="text"> </td>
</tr>

<tr>
    <td>Nama Ibu</td>
    <td>:</td>
    <td><input name="nama_ibu" type="text"> </td>
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
<form action="insertsiswa.php" method="get">
<label>Masukan NIS anda :</label>
<input type="text" name="cari">
<input type="submit" value="OK">
</form>
</div>

<?php 
if(isset($_GET['cari'])){
$cari = $_GET['cari'];
echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>
<table width='80%' border=1>


<thead><th>NIS</th> <th>NAMA SISWA</th> <th>JENIS KELAMIN</th> <th>ALAMAT</th>
    <th>TANGGAL LAHIR</th><th>NAMA AYAH</th><th>NAMA IBU</th><th></th><th></th></thead>    
<?php 
    if(isset($_GET['cari'])){
        $cari = $_GET['cari'];
        $result = mysqli_query($conn,"select * from data_siswa where nis like '%".$cari."%'");				
    }else{
        $result = mysqli_query($conn, "SELECT * FROM data_siswa ORDER BY nis DESC");
         
 }

while($user_data = mysqli_fetch_array($result)){ 
    ?>
<tr>    
    <td><?php echo $user_data['nis'];?></td>
    <td><?php echo $user_data['nama_siswa'];?></td>
    <td><?php echo $user_data['jk'];?></td>
    <td><?php echo $user_data['alamat'];?></td> 
    <td><?php echo $user_data['ttl'];?></td>   
    <td><?php echo $user_data['nama_ayah'];?></td>
    <td><?php echo $user_data['nama_ibu'];?></td>
    <td><a href="../admin/hapus_siswa.php?nis=<?php echo $user_data['nis']; ?>" name="hapus"> Delete </a></td>
        <td><a href="../admin/updatesiswa.php?nis=<?php echo $user_data['nis']; ?>" name="update"> Update </a></td>
<?php } ?>

        
    </table>  
    
    </body>    
 </html>