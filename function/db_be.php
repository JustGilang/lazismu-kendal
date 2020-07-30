<?php
include '../config/config.php';

$tr_stats = $_POST['status'];

switch($_GET['act']){
    case 'tr_edit' :
        $sql = mysqli_query($conn, "UPDATE d_transaksi SET stats='".$tr_stats."' ");
        if($sql){
            header('Location:../user/admin/a_transaksi.php');
        } else {
            echo '
            <script>
                alert("Gagal menambahkan data !");
                window.location = "../user/admin/a_transaksi.php"
            </script>
            ';
        }
    break;

    case 'tr_delete':
        $sql = mysqli_query($conn, "DELETE FROM d_transaksi WHERE id_transaksi='".$_GET['id']."'");
		if (isset($sql)) {
			# code...
			header('Location:../user/admin/a_transaksi.php');
		}
    break;
}
?>