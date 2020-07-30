<?php 
    session_start();
    include '../../config/config.php';
	if($_SESSION['status']!="login"){
		header("location:../../index.php?pesan=belum_login");
    }
    $id = $_GET['id'];
    $sql = mysqli_query($conn, "SELECT * FROM d_transaksi WHERE id_transaksi=$id");
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
            <header tabindex="0">EDIT DATA TRANSAKSI</header>
			<div class="bg"></div>
			<div class="button-back">
				<a href="a_transaksi.php"><i class="fa fa-arrow-left"></i></a>
			</div>
        </div>
        <main>
            <div>
                <p>Data Transaksi :</p>
                <div class="">
                    <div >
                        <form action="../../function/db_admin.php?act=tr_edit" method="POST">
                            <fieldset>
                                <br><br>
                                <input type="hidden" name="id" value="<?php echo $data['id_transaksi'];?>">
                                <label for="Status">Status:</label>
                                <select name="status" id="">
                                    <option value="terbayar">Terbayar</option>
                                    <option value="belum terbayar">Tidak Terbayar</option>
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