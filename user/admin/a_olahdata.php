<?php 
    session_start();
    include '../../config/config.php';
	if($_SESSION['status']!="login"){
		header("location:../../index.php?pesan=belum_login");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="../../assets/css/style.css">
</head>
<body>
	<div class="page">
		<div id="nav-container">
            <header tabindex="0">OLAH DATA</header>
			<div class="bg"></div>
			<div class="button" tabindex="0">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</div>
			<div id="nav-content" tabindex="0">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="a_olahdata.php">Olah Data</a></li>
					<li><a href="a_transaksi.php">Transaksi</a></li>
					<li><a href="a_profil.php">Profil</a></li>
					<li><a href="a_keuangan.php">Keuangan</a></li>
					<li><a href="../../function/db_logout.php">Logout</a></li>
				</ul>
			</div>
		</div>

		<main>
			<div class="content">
				<center>
                    <a href="a_olah_be.php"><input class="button-primary" type="button" value="DATA BE"></a>
                    <br><br>
                    <a href="a_olah_donatur.php"><input class="button-primary" type="button" value="DATA DONATUR"></a>
				</center>
			</div>
		</main>
	</div>
</body>
</html>