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
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>
<body>
	<div class="page">
		<div id="nav-container">
            <header tabindex="0">TAMBAH DATA DONATUR</header>
			<div class="bg"></div>
			<div class="button-back">
				<a href="a_olah_donatur.php"><i class="fa fa-arrow-left"></i></a>
			</div>
		</div>

		<main>
            <div>
                <p>Data Donatur :</p>
                <div class="">
                    <div >
                        <form action="../../function/db_admin.php?act=dn_add" method="POST">
                            <fieldset>
                                <br><br> 
                                <label for="name">Nama :</label>
                                <input type="text" id="name" name="nama">

                                <label for="bio">Alamat :</label>
                                <textarea id="bio" name="alamat"></textarea>

                                <label for="name">No Telepon :</label>
                                <input type="text" id="noTelp" name="no_telp">
                                            
                                <label for="email">Email:</label>
                                <input type="email" id="mail" name="email">
                                        
                                <label for="password">Password:</label>
                                <input type="password" id="password" name="pass">
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