<?php
session_start();
include '../../config/config.php';
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
            <header tabindex="0">DATA BE</header>
			<div class="bg"></div>
			<div class="button-back">
				<a href="a_olahdata.php"><i class="fa fa-arrow-left"></i></a>
			</div>
		</div>

		<main>
			<div class="content">
                <br><br><br><br>
                <a href="a_olah_be_add.php">&nbsp; + Tambah Data</a>
                <br><br>
                <table>
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nama BE</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">No Telepon</th>
                            <th scope="col">Email</th>
                            <th scope="col">Password</th>
                            <th scope="col">Status</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = mysqli_query($conn, "SELECT * FROM d_be ORDER BY id_be ASC");
                        while($data = mysqli_fetch_array($query)){
                        ?>
                        <tr>
                            <td data-label="ID"><?php echo $data['id_be'];?></td>
                            <td data-label="Nama BE"><?php echo $data['nama'];?></td>
                            <td data-label="Alamat"><?php echo $data['alamat'];?></td>
                            <td data-label="No Telepon"><?php echo $data['no_telp'];?></td>
                            <td data-label="Email"><?php echo $data['email'];?></td>
                            <td data-label="Password"><?php echo $data['pass'];?></td>
                            <td data-label="Status"><?php echo $data['stats'];?></td>
                            <td data-label="">
                                <a href="a_olah_be_edit.php?id=<?php echo $data['id_be'];?>" style="color:green;"><i class="fa fa-th-list"></i> Edit</a> | 
                                <a href="../../function/db_admin.php?act=be_delete&id=<?php echo $data['id_be'];?>" style="color:red;"><i class="fa fa-trash"></i> Hapus</a>
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