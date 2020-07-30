<?php 
    include '../../config/config.php';
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../../index.php");
    }
    $sql = mysqli_query($conn, "SELECT SUM(nominal) FROM d_transaksi WHERE stats='terbayar'");
    $data = mysqli_fetch_array($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
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
					<li><a href="#0">Home</a></li>
					<li><a href="d_transaksi.php">Transaksi</a></li>
					<li><a href="d_profil.php">Profil</a></li>
					<li><a href="d_keuangan.php">keuangan</a></li>
					<li><a href="../../function/db_logout.php">Logout</a></li>
				</ul>
			</div>
		</div>

		<main>
			<div class="content">
                <br><br><br>
                <div class="container">
                    <div class="toast" data-autohide="false">
                        <div class="toast-header">
                            <strong class="mr-auto text-primary">Sisa Saldo</strong>
                        </div>
                        <div class="toast-body">
                            <?= $data['SUM(nominal)']?>
                        </div>
                    </div>
                </div>
                <br>
                <div class="container">
                    <div class="toast" data-autohide="false">
                        <div class="toast-header">
                            <strong class="mr-auto text-primary">Pengeluaran</strong>
                        </div>
                        <div class="toast-body">
                            <table border="0">
                                <?php
                                $sql1 = mysqli_query($conn, "SELECT * FROM d_pengeluaran");
                                while($data1 = mysqli_fetch_array($sql1)){
                                ?>
                                <tr>
                                    <th width="50%"><?= $data1['nama']?></th>
                                    <th align="right"><?= $data1['nominal']?></th>
                                </tr>
                                <?php }?>
                            </table>
                        </div>
                    </div>
                </div>
			</div>
		</main>
    </div>
    
    <script>
    $(document).ready(function(){
    $('.toast').toast('show');
    });
    </script>
</body>
</html>