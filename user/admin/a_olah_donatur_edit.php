<?php 
    session_start();
    include '../../config/config.php';
	if($_SESSION['status']!="login"){
		header("location:../../index.php?pesan=belum_login");
    }
    $id = $_GET['id'];
    $sql = mysqli_query($conn, "SELECT * FROM d_donatur WHERE id_donatur= $id");
    $data = mysqli_fetch_array($sql);
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
            <header tabindex="0">EDIT DATA DONATUR</header>
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
                        <form action="../../function/db_admin.php?act=dn_edit" method="POST">
                            <fieldset>
                                <br><br> 
                                <input type="hidden" id="name" name="id_donatur" value="<?php echo $data['id_donatur'];?>">

                                <label for="name">Nama :</label>
                                <input type="text" id="name" name="nama" value="<?php echo $data['nama'];?>">

                                <label for="bio">Alamat :</label>
                                <textarea id="bio" name="alamat"><?php echo $data['alamat'];?></textarea>

                                <label for="name">No Telepon :</label>
                                <input type="text" id="noTelp" name="no_telp" value="<?php echo $data['no_telp'];?>">
                                            
                                <label for="email">Email:</label>
                                <input type="email" id="mail" name="email" value="<?php echo $data['email'];?>">
                                        
                                <label for="password">Password:</label>
                                <input type="password" id="password" name="pass" value="<?php echo $data['pass'];?>">

                                <label for="Status">Status:</label>
                                <select name="status" id="">
                                    <option value="AKTIF">AKTIF</option>
                                    <option value="TIDAK AKTIF">TIDAK AKTIF</option>
                                </select>
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