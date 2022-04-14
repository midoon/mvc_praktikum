<?php
	session_start();
	if (empty($_SESSION['username'])){
		echo "<center>Anda harus login terlebih dahulu";
	  	echo '<p><a href="index.php">Login disini</a></p></center>';
	} else {
		include_once("c_menteri.php");
		$controller = new c_programKerja();
		$controller->invoke();
		echo '<center><p><a href="logout.php">Logout</a></p>';
	}
?>
