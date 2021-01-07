<?php
include "koneksiadmin.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <title>Dashboard Admin</title>

 <link rel="stylesheet" href="styleadmin2.css">
</head>
<body>

 <div class="navbar">
  <h3 class="admin">Dashboard Admin</h3>
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
 <br>
 <br>
 <br>
 <div class="header";>
    <h1 style ="color:black;">Selamat Datang di Halaman Admin</h1>
       <center><img src="../admin/img/logo.png" style="width: 300px; 
       border: 1px;"></center>
       <br>
       <p style ="color:black;"> Silahkan pilih menu berikut dan silahkan mengatur konten yang sudah ditetapkan</p>   

</div>
</body>
</html>