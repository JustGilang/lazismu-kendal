<?php 
  session_start();
  include '../config/config.php';
  
  $email = $_POST['email'];
  $pass = $_POST['pass'];
  
  $query_adm  = mysqli_query($conn, "SELECT id_admin FROM d_admin WHERE email='$email'");
  $query_be   = mysqli_query($conn, "SELECT id_be FROM d_be WHERE email='$email'");
  $query_dntr = mysqli_query($conn, "SELECT id_donatur FROM d_donatur WHERE email='$email'");

  $count1 = mysqli_num_rows($query_adm);
  $count2 = mysqli_num_rows($query_be);
  $count3 = mysqli_num_rows($query_dntr);

  if($count1 > 0){
    $queryId = mysqli_query($conn, "SELECT id_admin FROM d_admin WHERE email='$email' AND pass='$pass'");
    $numRow = mysqli_num_rows($queryId);
    if($numRow == 0){
      echo '
        <script>
          alert("Email Atau Password Salah.");
          window.location = "../index.php"
        </script>
      ';
    } else {
      $arrayId = mysqli_fetch_array($queryId);
      $_SESSION['id_admin'] = $arrayId['id_admin'];
      $_SESSION['status'] = "login";
      if(isset($_SESSION['id_admin'])){
        echo '
        <script>
          alert("Login Sukses!");
          window.location = "../user/admin/index.php"
        </script>
        ';
      }
    }
  } elseif ($count2 > 0){
    $queryId = mysqli_query($conn, "SELECT id_be FROM d_be WHERE email='$email' AND pass='$pass'");
    $numRow = mysqli_num_rows($queryId);
    if($numRow == 0){
      echo '
        <script>
          alert("Email Atau Password Salah.");
          window.location = "../index.php"
        </script>
      ';
    } else {
      $arrayId = mysqli_fetch_array($queryId);
      $_SESSION['id_be'] = $arrayId['id_be'];
      $id = $_SESSION['id_be'];
      $_SESSION['status'] = "login";
      if(isset($_SESSION['id_be'])){
        echo '
        <script>
          alert("Login Sukses!");
          window.location = "../user/be/index.php?id= '.$id .'"
        </script>
        ';
      }
    }
  } elseif($count3 > 0){
    $queryId = mysqli_query($conn, "SELECT id_donatur FROM d_donatur WHERE email='$email' AND pass='$pass'");
    $numRow = mysqli_num_rows($queryId);
    if($numRow == 0){
      echo '
        <script>
          alert("Email Atau Password Salah.");
          window.location = "../index.php"
        </script>
      ';
    } else {
      $arrayId = mysqli_fetch_array($queryId);
      $_SESSION['id_donatur'] = $arrayId['id_donatur'];
      $_SESSION['status'] = "login";
      if(isset($_SESSION['id_donatur'])){
        echo '
        <script>
          alert("Login Sukses!");
          window.location = "../user/donatur/index.php"
        </script>
        ';
      }
    }
  } else {
    echo '
      <script>
        alert("Email tidak terdaftar.");
        window.location = "../index.php"
      </script>
    ';
  }
?>

<?php
session_start();
include '../config/config.php';
  
$email = $_POST['email'];
$pass = $_POST['pass'];

$query_adm  = mysqli_query($conn, "SELECT id_admin FROM d_admin WHERE email='$email'");
$query_be   = mysqli_query($conn, "SELECT id_be FROM d_be WHERE email='$email'");
$query_dntr = mysqli_query($conn, "SELECT id_donatur FROM d_donatur WHERE email='$email'");

$count1 = mysqli_num_rows($query_adm);
$count2 = mysqli_num_rows($query_be);
$count3 = mysqli_num_rows($query_dntr);

$data1 = mysqli_fetch_array($query_adm);
$data2 = mysqli_fetch_array($query_be);
$data3 = mysqli_fetch_array($query_dntr);

if ($count1 == '1') {
	# code...
	$_SESSION['id_admin']=$data1['id_admin'];
	if ($status=="") {
		# code...
		echo '
      <script>
        alert("Login Sukses!");
        window.location = "../user/donatur/index.php"
      </script>
    ';
	}else{	
		echo '
      <script>
        alert("Email tidak terdaftar.");
        window.location = "../index.php"
      </script>
    ';
	}
	//header('Location:../login.php?status=sukses');
} elseif ($count2 == '1') {
	# code...
	$_SESSION['id_be']=$data2['id_be'];
	if ($status=="") {
		# code...
		echo '
      <script>
        alert("Login Sukses!");
        window.location = "../user/donatur/index.php"
      </script>
    ';
	}else{	
		echo '
      <script>
        alert("Email tidak terdaftar.");
        window.location = "../index.php"
      </script>
    ';
	}
	//header('Location:../login.php?status=sukses');
} elseif ($count3 == '1') {
	# code...
	$_SESSION['id_donatur']=$data3['id_donatur'];
	if ($status=="") {
		# code...
		echo '
      <script>
        alert("Login Sukses!");
        window.location = "../user/donatur/index.php"
      </script>
    ';
	}else{	
		echo '
      <script>
        alert("Email tidak terdaftar.");
        window.location = "../index.php"
      </script>
    ';
	}
	//header('Location:../login.php?status=sukses');
}
?>