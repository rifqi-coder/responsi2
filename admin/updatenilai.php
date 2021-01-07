<?php
        include 'koneksiadmin.php';
        
       
?>
<html>
<head>
	<title>Edit Postingan</title>
</head>
<body>
 
	<h1>EDIT PENILAIAN</h1>
	<br/>
	<a href="insertnilai.php">KEMBALI</a>
	<br>

    <?php     
    $id = $_GET['id'];

    $result = mysqli_query($conn,"select * from penilaian");	
    while($data = mysqli_fetch_array($result)){
    ?>
 

<form action="updatenilai_proses.php" method="POST">
    
    <fieldset>

    <table width="600" border="0" align="center" cellpadding="10" cellspacing="1">

    <tr>
  
    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">

    <tr>
    <td>NIS</td>
    <td>:</td>
    <td><input name="nis" type="text" readonly value="<?php echo $data['nis']; ?>"></td>
</tr>

    <tr>
    <td>Nama Siswa</td>
    <td>:</td>
    <td><input name="nama_siswa" type="text" readonly value="<?php echo $data['nama_siswa']; ?>"></td>
</tr>

<tr>
    <td>Kode Mata Pelajaran</td>
    <td>:</td>
    <td><input type="text"  name="kd_mapel" value="<?php echo $data['kd_mapel']; ?>"></td>
</tr>

<tr>
    <td>Nama Mata Pelajaran</td>
    <td>:</td>
    <td><input type="text"  name="nama_mapel" value="<?php echo $data['nama_mapel']; ?>"></td>
</tr>

<tr>
    <td>Nilai Uts</td>
    <td>:</td>
    <td><input type="text"  name="nilai_uts" value="<?php echo $data['nilai_uts']; ?>"></td>
</tr>

<tr>
    <td>Nilai Uas </td>
    <td>:</td>
    <td><input name="nilai_uas" type="text" value="<?php echo $data['nilai_uas']; ?>"></td>
</tr>






<tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td><input type="submit" name="upda"  value="Update!"></td>
</tr>



</tr>

</table>
</fieldset>

</form>
<?php } ?>
</body>
</html>
