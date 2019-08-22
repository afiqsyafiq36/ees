<?php
include "sambung.php";

	$katalaluan = $_POST['pass'];
	$namapenuh = $_POST['fname'];
	$nomatrik = $_POST['matrik'];
	$email = $_POST['email'];
	$id = $_POST['idk'];

	$kemaskini = mysqli_query($hubung, 
		"UPDATE user SET password = '$katalaluan',fullname = '$namapenuh',nomatrik = '$nomatrik',email = '$email'
		 WHERE id = '$id'
		                                                    ");

	echo "<script>alert('Maklumat pelajar telah berjaya dikemaskini');
	      window.location = 'kemaskinipelajar.php'</script>";

?>