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
</head>
<body>
	<div class="page">
		<div id="nav-container">
			<div class="bg"></div>
			<div class="button" tabindex="0">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</div>
			<div id="nav-content" tabindex="0">
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="a_olahdata.php">Olah Data</a></li>
					<li><a href="a_transaksi.php">Transaksi</a></li>
					<li><a href="a_profil.php">Profil</a></li>
					<li><a href="a_keuangan.php">Keuangan</a></li>
					<li><a href="../../function/db_logout.php">Logout</a></li>
				</ul>
			</div>
		</div>

		<main>
            <div>
                <p>Data Pengeluaran :</p>
                <div class="">
                    <div >
                        <form action="../../function/db_admin.php?act=add_pengeluaran" method="POST">
                            <fieldset>
                                <br><br> 
                                <label for="name">Nama :</label>
								<input type="text" id="name" name="nama">

								<label for="name">Tanggal :</label>
                                <input type="text" id="tanggal" name="tanggal" value="<?= date('Y-m-d')?>" readonly>

                                <label for="name">Nominal :</label>
                                <input type="text" id="nominal" name="nominal">

                            </fieldset>
                                    
                            <center>
                                <button class="button-primary" type="submit">Tambah</button>
                            </center>
                        </form>
                    </div>
                </div>
            </div>
        </main>
	</div>
</body>
</html>