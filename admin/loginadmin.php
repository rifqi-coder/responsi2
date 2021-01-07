

<!DOCTYPE html>
<head>
<link rel="stylesheet" href="stylelogin.css">
<div class="wrap">
		<div class="header">			
			<h1 style = "text-align: center;">MI GUPPI CILENGKRANG</h1>
			<p style = "text-align: center;">Jl. Raya Cilengkrang Induk, Cilengkrang, Pasaleman, Cirebon, Jawa Barat, Indonesia</p>
        </div>


	<title style = "text-align: center;">LOGIN FORM Admin</title>

	</head>
	<body style = "text-align: center;">

	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman ";
		}
	}
	?>

<form class="login" action="ceklogin.php" method="post">
<h3>Silahkan Login Dahulu</h3>

<p>Username : <br>
<input type=text name="username">
</p>
<p>
Password : <br>
<input type=password name="password">
</p>
<p>
<input type="submit" value=LOGIN>
</p>

</body>
</html>