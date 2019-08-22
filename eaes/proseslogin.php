<?php 
include "sambung.php";
//umpukan nilai variable bagi input daripada login pengguna


$username = $_POST['uname'];
$password = $_POST['pass'];
$level = $_POST['level'];

$query = mysqli_query($hubung,"SELECT * FROM user WHERE username = '$username' AND password = '$password'");
$cek = mysqli_num_rows($query);


//semakan

  

  	if($cek > 0) {

	     $data = mysqli_fetch_array($query);
	     session_start();
	     $_SESSION['uname'] = $data['username'];
       	 $_SESSION['id'] = $data['id'];
       	 $_SESSION['fullname'] = $data['fullname'];
         $_SESSION['nomatrik'] = $data['nomatrik'];
         $_SESSION['email'] = $data['email'];
         $_SESSION['sesi'] = $data['sesi'];

       	 
       	 if ($_POST['level'] != $data['level']) {
	     	echo "<script>alert('Akses tidak dibenarkan')</script>";
	        echo "<script>window.location.href='userlogin.php';</script>";
	     }
       	 elseif($level AND $data['level'] == '1') {

	        header("location:dashboardpelajar.php");
	     }
	     elseif ($level AND $data['level'] == '2') {
	     	header("location:dashboardpensyarah.php");
	     }
	     
	     
    }
    else {
	     //login gagal
	     echo "<script>alert('Nama Pengguna atau Kata Laluan Salah')</script>";
	     echo "<script>window.location.href='userlogin.php';</script>";
    }


?>