<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../../index.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="../../assets/css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>
<body>
	<div class="page">
		<div id="nav-container">
            <header tabindex="0">TRANSAKSI</header>
			<div class="bg"></div>
			<div class="button" tabindex="0">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</div>
			<div id="nav-content" tabindex="0">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="#">Transaksi</a></li>
					<li><a href="d_profil.php">Profil</a></li>
					<li><a href="d_keuangan.php">keuangan</a></li>
					<li><a href="../../function/db_logout.php">Logout</a></li>
				</ul>
			</div>
		</div>

		<main>
			<div class="content">
				<center>
                    <a href="d_transaksi_pa.php"><input class="button-primary" type="button" value="PERSONALLY AGENT"></a>
                    <br><br>
                    <a href="d_transaksi_tf.php"><input class="button-primary" type="button" value="TRANSFER"></a>
				</center>
			</div>
		</main>
	</div>
</body>
</html>