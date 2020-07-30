<?php
include '../config/config.php';

switch($_GET['act']){
    case 'be_edit' :
        $be_id = $_POST['id_be'];
        $be_nama = $_POST['nama'];
        $be_alamat = $_POST['alamat'];
        $be_no_telp = $_POST['no_telp'];
        $be_pass = $_POST['pass'];
        $be_email = $_POST['email'];
        $be_stats = $_POST['status'];
        $be_status = 'AKTIF';

        $dn_id = $_POST['id_donatur'];
        $dn_nama = $_POST['nama'];
        $dn_alamat = $_POST['alamat'];
        $dn_no_telp = $_POST['no_telp'];
        $dn_pass = $_POST['pass'];
        $dn_email = $_POST['email'];
        $dn_stats = $_POST['status'];
        $dn_status = 'AKTIF';

        $tr_id = $_POST['id'];
        $tr_stats = $_POST['status'];
        $sql = mysqli_query($conn, "UPDATE d_be SET nama='".$be_nama."', alamat='".$be_alamat."', no_telp='".$be_no_telp."', pass='".$be_pass."', email='".$be_email."', stats='".$be_stats."' WHERE id_be='".$be_id."'");
        if($sql){
            header('Location:../user/admin/a_olah_be.php');
        } else {
            echo '
            <script>
                alert("Gagal menambahkan data !");
                window.location = "../user/admin/a_olah_be.php"
            </script>
            ';
        }
    break;

    case 'be_add' :
        $be_id = $_POST['id_be'];
        $be_nama = $_POST['nama'];
        $be_alamat = $_POST['alamat'];
        $be_no_telp = $_POST['no_telp'];
        $be_pass = $_POST['pass'];
        $be_email = $_POST['email'];
        $be_stats = $_POST['status'];
        $be_status = 'AKTIF';

        $dn_id = $_POST['id_donatur'];
        $dn_nama = $_POST['nama'];
        $dn_alamat = $_POST['alamat'];
        $dn_no_telp = $_POST['no_telp'];
        $dn_pass = $_POST['pass'];
        $dn_email = $_POST['email'];
        $dn_stats = $_POST['status'];
        $dn_status = 'AKTIF';

        $tr_id = $_POST['id'];
        $tr_stats = $_POST['status'];
        $sql = mysqli_query($conn, "INSERT INTO d_be (nama, alamat, no_telp, pass, email, stats) VALUES
        ('".$be_nama."','".$be_alamat."','".$be_no_telp."','".$be_pass."','".$be_email."','".$be_status."')");

        if($sql){
            header('Location:../user/admin/a_olah_be.php');
        } else {
            echo '
            <script>
                alert("Gagal menambahkan data !");
                window.location = "../user/admin/a_olah_be.php"
            </script>
            ';
        }
    break;

    case 'be_delete' :
        $sql = mysqli_query($conn,"DELETE FROM d_be WHERE id_be='".$_GET['id']."'");
		if (isset($sql)) {
			# code...
			header('Location:../user/admin/a_olah_be.php');
		}
    break;

    case 'dn_add' :
        $be_id = $_POST['id_be'];
        $be_nama = $_POST['nama'];
        $be_alamat = $_POST['alamat'];
        $be_no_telp = $_POST['no_telp'];
        $be_pass = $_POST['pass'];
        $be_email = $_POST['email'];
        $be_stats = $_POST['status'];
        $be_status = 'AKTIF';

        $dn_id = $_POST['id_donatur'];
        $dn_nama = $_POST['nama'];
        $dn_alamat = $_POST['alamat'];
        $dn_no_telp = $_POST['no_telp'];
        $dn_pass = $_POST['pass'];
        $dn_email = $_POST['email'];
        $dn_stats = $_POST['status'];
        $dn_status = 'AKTIF';

        $tr_id = $_POST['id'];
        $tr_stats = $_POST['status'];
        $sql = mysqli_query($conn, "INSERT INTO d_donatur (nama, alamat, no_telp, pass, email, stats) VALUES
        ('".$dn_nama."','".$dn_alamat."','".$dn_no_telp."','".$dn_pass."','".$dn_email."','".$dn_status."')");

        if($sql){
            header('Location:../user/admin/a_olah_donatur.php');
        } else {
            echo '
            <script>
                alert("Gagal menambahkan data !");
                window.location = "../user/admin/a_olah_donatur.php"
            </script>
            ';
        }
    break;

    case 'dn_edit' :
        $be_id = $_POST['id_be'];
        $be_nama = $_POST['nama'];
        $be_alamat = $_POST['alamat'];
        $be_no_telp = $_POST['no_telp'];
        $be_pass = $_POST['pass'];
        $be_email = $_POST['email'];
        $be_stats = $_POST['status'];
        $be_status = 'AKTIF';

        $dn_id = $_POST['id_donatur'];
        $dn_nama = $_POST['nama'];
        $dn_alamat = $_POST['alamat'];
        $dn_no_telp = $_POST['no_telp'];
        $dn_pass = $_POST['pass'];
        $dn_email = $_POST['email'];
        $dn_stats = $_POST['status'];
        $dn_status = 'AKTIF';

        $tr_id = $_POST['id'];
        $tr_stats = $_POST['status'];
        $sql = mysqli_query($conn, "UPDATE d_donatur SET nama='".$dn_nama."', alamat='".$dn_alamat."', no_telp='".$dn_no_telp."', pass='".$dn_pass."', email='".$be_email."', stats='".$dn_stats."' WHERE id_donatur = '".$dn_id."'");
        if($sql){
            header('Location:../user/admin/a_olah_donatur.php');
        } else {
            echo '
            <script>
                alert("Gagal menambahkan data !");
                window.location = "../user/admin/a_olah_donatur.php"
            </script>
            ';
        }
    break;

    case 'dn_delete' :
        $sql = mysqli_query($conn, "DELETE FROM d_donatur WHERE id_donatur='".$_GET['id']."' ");
		if (isset($sql)) {
			# code...
			header('Location:../user/admin/a_olah_donatur.php');
		}
    break;

    case 'tr_edit' :
        $be_id = $_POST['id_be'];
        $be_nama = $_POST['nama'];
        $be_alamat = $_POST['alamat'];
        $be_no_telp = $_POST['no_telp'];
        $be_pass = $_POST['pass'];
        $be_email = $_POST['email'];
        $be_stats = $_POST['status'];
        $be_status = 'AKTIF';
        
        $dn_id = $_POST['id_donatur'];
        $dn_nama = $_POST['nama'];
        $dn_alamat = $_POST['alamat'];
        $dn_no_telp = $_POST['no_telp'];
        $dn_pass = $_POST['pass'];
        $dn_email = $_POST['email'];
        $dn_stats = $_POST['status'];
        $dn_status = 'AKTIF';
        
        $tr_id = $_POST['id'];
        $tr_stats = $_POST['status'];
        $sql = mysqli_query($conn, "UPDATE d_transaksi SET stats='".$tr_stats."' WHERE id_transaksi='".$tr_id."' ");
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

    case 'add_pengeluaran' :
        echo $nama = $_POST['nama'];
        echo $tanggal = $_POST['tanggal'];
        echo $nominal = $_POST['nominal'];

        $sql = mysqli_query($conn, "INSERT INTO d_pengeluaran (nama, tanggal, nominal) VALUES ('".$nama."', '".$tanggal."', '".$nominal."')");
        if($sql){
            header('Location:../user/admin/a_keuangan.php');
        } else {
            echo '
            <script>
                alert("Gagal menambahkan data !");
                window.location = "../user/admin/a_keuangan.php"
            </script>
            ';
        }
    break;
}
?>