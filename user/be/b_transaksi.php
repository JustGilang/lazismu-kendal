<?php 
    session_start();
    include '../../config/config.php';
    $_SESSION['id_be'];
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
            <header tabindex="0">DATA TRANSAKSI</header>
			<div class="bg"></div>
			<div class="button" tabindex="0">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</div>
			<div id="nav-content" tabindex="0">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="">Transaksi</a></li>
					<li><a href="b_profil.php">Profil</a></li>
					<li><a href="../../function/db_logout.php">Logout</a></li>
				</ul>
			</div>
		</div>

		<main>
			<div class="content">
                <br>
                <br><br>
                <table>
                    <thead>
                        <tr>
                            <th scope="col">ID_Transaksi</th>
                            <th scope="col">Pengirim</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Nominal</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">Status</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = mysqli_query($conn, "SELECT * FROM d_transaksi WHERE metode='personally_agent' ORDER BY id_transaksi ASC");
                        while($data = mysqli_fetch_array($query)){
                            $sql = mysqli_query($conn, "SELECT nama FROM d_donatur WHERE id_donatur = $data[id_user]");                            
                            $d = mysqli_fetch_assoc($sql);
                        ?>
                        <tr>
                            <td data-label="ID"><?php echo $data['id_transaksi'];?></td>
                            <td data-label="Nama BE"><?php echo $d['nama'];?></td>
                            <td data-label="Alamat"><?php echo $data['nominal'];?></td>
                            <td data-label="No Telepon"></td>
                            <td data-label="Status"><?php echo $data['metode'];?></td>
                            <td data-label="Status"><?php echo $data['stats'];?></td>
                            <td data-label="">
                                <a href="b_transaksi_edit.php?id=<?php echo $data['id_transaksi'];?>" style="color:green;"><i class="fa fa-th-list"></i> Edit</a> | 
                                <a href="../../function/db_admin.php?act=tr_delete&id=<?php echo $data['id_transaksi'];?>" style="color:red;"><i class="fa fa-trash"></i> Hapus</a>
                            </td>
                        </tr>
                        <?php }  ?>
                    </tbody>
                </table>
			</div>
		</main>
    </div>
</body>
</html>