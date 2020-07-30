<?php 
	session_start();
	include '../../config/config.php';
	$id = $_SESSION['id_donatur'];
	if($_SESSION['status']!="login"){
		header("location:../../index.php");
	}
	$sql = mysqli_query($conn, "SELECT * FROM d_donatur WHERE id_donatur = '".$id."'");
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
            <header tabindex="0">PROFIL DONATUR</header>
			<div class="bg"></div>
			<div class="button" tabindex="0">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</div>
			<div id="nav-content" tabindex="0">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="d_transaksi.php">Transaksi</a></li>
					<li><a href="#">Profil</a></li>
					<li><a href="d_keuangan.php">keuangan</a></li>
					<li><a href="../../function/db_logout.php">Logout</a></li>
				</ul>
			</div>
		</div>

		<main>
            <div>
                <p>Profil :</p>
                <div class="">
                    <div >
					<form action="d_profil.php" method="post">
                            <fieldset>
                                <br><br> 
                                <label for="name">Nama :</label>
                                <input type="text" id="name" name="nama" value="<?php echo $data['nama']; ?>">

                                <label for="bio">Alamat :</label>
                                <textarea id="bio" name="alamat"><?php echo $data['alamat']; ?></textarea>
                                
                                <label for="email">Email:</label>
                                <input type="email" id="mail" name="email" value="<?php echo $data['email']; ?>">
                            
                                <label for="password">Password:</label>
								<input type="password" id="password" name="pass" value="<?php echo $data['pass']; ?>">
								
								<label for="name">CP :</label>
                                <input type="text" id="name" name="no_telp" value="<?php echo $data['no_telp']; ?>">
                            </fieldset>
                        
                            <center>
								<button class="button-primary" type="submit" name="simpan">Simpan</button>
							</center>
						</form>
						<?php 
						if(isset($_POST['simpan'])){
							$d_nama = $_POST['nama'];
							$d_alamat = $_POST['alamat'];
							$d_email = $_POST['email'];
							$d_pass = $_POST['pass'];
							$d_no_telp = $_POST['no_telp'];

							$sql = mysqli_query($conn, "UPDATE d_donatur SET nama='".$d_nama."', alamat='".$d_alamat."', no_telp='".$d_no_telp."', pass='".$d_pass."', email='".$d_email."' ");
							if($sql){
								echo '
								<script>
									alert("Data has been updated !");
									window.location = "d_profil.php"
								</script>
								';
							} else {
								echo '
								<script>
									alert("Gagal menambahkan data !");
									window.location = "d_profil.php"
								</script>
								';
							}
						}
						?>
                    </div>
                </div>
            </div>
		</main>
	</div>
</body>
</html>