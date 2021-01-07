<?php
        include 'koneksiadmin.php';
        
       
?>
<html>
<head>
	<title>Edit</title>
</head>
<body>
 
	<h1>EDIT SISWA</h1>
	<br/>
	<a href="insertsiswa.php">KEMBALI</a>
	<br>

    <?php     
    $id = $_GET['nis'];

    $result = mysqli_query($conn,"select * from data_siswa");	
    while($data = mysqli_fetch_array($result)){
    ?>

<form action="updatesiswa_proses.php" method="POST" >
    
    <fieldset>

    <table width="600" border="0" align="center" cellpadding="10" cellspacing="1">

    <tr>
    
    <input type="hidden" name="nis" value="<?php echo $data['nis']; ?>">

    <tr>
    <tr>
    <td>Nama Siswa</td>
    <td>:</td>
    <td><input name="nama_siswa" type="text" value="<?php echo $data['nama_siswa']; ?>"></td>
</tr>

<tr>
    <td> Jenis Kelamin</td>
    <td>:</td>
    <td> <input readonly name="jenisk" type="text" value="<?php echo $data['jk']; ?>"></td>
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
    <td><input type="text"  name="alamat" value="<?php echo $data['alamat']; ?>"></td>
</tr>

<tr>
    <td>Tanggal Lahir</td>
    <td>:</td>
    <td><input type="text"  name="ttl" value="<?php echo $data['ttl']; ?>"></td>
</tr>


<tr>
    <td>Nama Ayah</td>
    <td>:</td>
    <td><input name="nama_ayah" type="text" value="<?php echo $data['nama_ayah']; ?>"> </td>
</tr>

<tr>
    <td>Nama Ibu</td>
    <td>:</td>
    <td><input name="nama_ibu" type="text" value="<?php echo $data['nama_ibu']; ?>"> </td>
</tr>

</tr>



<tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td><input type="submit" name="updateisi" value="Update!"></td>
</tr>



</tr>

</table>
</fieldset>

</form>
<?php } ?>
</body>
</html>
