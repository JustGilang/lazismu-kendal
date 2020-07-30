<?php
session_start();
include '../config/config.php';
if($_SESSION['status']!="login"){
    header("location:../../index.php");
}

switch($_GET['act']){
    case 'tr_add_tf' :
        //menentukan file upload 
        $target_dir = "../transaksi/";//alamat lokasi folder gmbr akan disimpan
        $target_file = $target_dir . basename($_FILES["file"]["name"]);//detail spesifikasi lokasi dan nama file
        $uploadOk=1;

        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
                //Proses Files and DB
                //Files Data
                $fil_name=$_FILES["file"]["name"];

                $tr_id = $_SESSION['id_donatur'];
                $tr_tanggal = date("Y-m-d H:i:s");
                $tr_metode = 'transfer';
                $tr_nominal = $_POST['nominal'];
                $tr_stats = 'Belum Terbayar';
                //Inserting Database
                $sql = mysqli_query($conn, "INSERT INTO d_transaksi (id_user, tanggal, nominal, gambar, metode, stats) VALUES
                ('".$tr_id."', '".$tr_tanggal."','".$tr_nominal."','".$fil_name."','".$tr_metode."','".$tr_stats."')");
                if(!$sql){
                    echo 'mysqli Error!';
                    mysqli_close($conn);
                    exit;
                }

                echo "The file ". basename( $_FILES["file"]["name"]). " has been uploaded.";
                header( "refresh:3;url=../user/donatur/d_transaksi.php" );
                echo 'You\'ll be redirected in about 3 secs. If not, click <a href="../user/donatur/d_transaksi.php">here</a>.';
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    break;

    case 'tr_add_pa' :
        $tr_id = $_SESSION['id_donatur'];
        $tr_tanggal = date("Y-m-d H:i:s");
        $tr_metode = 'personally_agent';
        $tr_nominal = $_POST['nominal'];
        $tr_stats = 'Belum Terbayar';
        $_blank = "-";
        //Inserting Database
        $sql = mysqli_query($conn, "INSERT INTO d_transaksi (id_user, tanggal, nominal, gambar, metode, stats) VALUES
        ('".$tr_id."', '".$tr_tanggal."','".$tr_nominal."','".$blank."','".$tr_metode."','".$tr_stats."')");
        if(!$sql){
            echo 'mysqli Error!';
            mysqli_close($conn);
            exit;
        } else {
            echo '
            <script>
                alert("Berhasil menambah data!");
                window.location = "../user/donatur/d_transaksi.php"
            </script>
            ';
        }
    break;

}
?>