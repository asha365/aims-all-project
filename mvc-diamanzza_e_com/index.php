<?php /*mvc framework setup*/ 
	
	include 'mvc-FRAMEWORK/Configuration/config.php';/*database info file included*/
	include 'mvc-FRAMEWORK/Library/Database.php';/*database qry file included*/

	$DB =new Database(); /* object of Database class*/
?>
<?php
	$theme_qry = "SELECT * FROM tb_mvc_e_com_theme WHERE theme_status=1";
	$theme_result = $DB->select($theme_qry);
	if($theme_result){
		$theme = $theme_result->fetch_assoc();
		if($theme){
		}else{
		header('Location:404.php'); 
		}
	}
?>