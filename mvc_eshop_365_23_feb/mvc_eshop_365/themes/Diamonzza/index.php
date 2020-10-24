<?php 
	if(!isset($_GET['PGE'])){
		header('Location:?PGE=home'); 
	}

	if(isset($_GET['PGE'])){
		
		$page = $_GET['PGE']; 

		include 'header.php';
		include $page.'.php';
		include 'footer.php';
	}
?>