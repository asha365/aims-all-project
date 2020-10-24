<?php
    include '../../mvc-FRAMEWORK/Configuration/config.php';/*database info file included*/
    include '../../mvc-FRAMEWORK/Library/Database.php';/*database qry file included*/
    $DB = new Database(); /*object of Database Class*/
?>

<?php 
	$siteinfo_data_qry = "SELECT * FROM tb_mvc_365_siteinfo WHERE siteinfo_id=1";
	$site_data_result = $DB->select($siteinfo_data_qry); 
	if($site_data_result){
		$site_data = $site_data_result->fetch_assoc(); 
	}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php if(isset($site_data)){ echo $site_data['siteinfo_title']; } ?></title>

    <!-- Bootstrap -->
    <link href="Asset/css/bootstrap.css" rel="stylesheet">
    <link href="Asset/css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <!---------------------------------------------------------------------------------->
  <!---------------------------------------------------------------------------------->
  <!----------------------------------Dia_menu start------------------------------------------------>
  <!---------------------------------------------------------------------------------->
  <!---------------------------------------------------------------------------------->
  <div class="container"> 
  
		<div class="nav top-menu">
			<div class="icon-nav">
				<span class="icon glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
			</div>
			<div class="menu-items">
				
				<div class="col-md-3 menu_dia_box"> 
					<h4 style=""><a href="Home.html">Home</a></h4>
					<a href="" >Anglet</a><br/>
					<a href="">Anglets for Tens</a><br/>
					<a href="">Blue Stone Anglet</a><br/>
					<a href="">Stone Anglet</a><br/>
					<a href="">Gold Ring Diamond Anglet</a><br/>
				</div>
				<div class="col-md-3 menu_dia_box"> 
					<h4><a href="product.html">product</a></h4>
					<a href="">Anglet</a><br/>
					<a href="">Anglets for Tens</a><br/>
					<a href="">Gold Ring Diamond Anglet</a><br/>
				</div>
				<div class="col-md-3 menu_dia_box "> 
					<h4><a href="brands.html">Brand</a></h4>
					<a href="">Anglet</a><br/>
					<a href="">Anglets for Tens</a><br/>
					<a href="">Blue Stone Anglet</a><br/>
					<a href="">Stone Anglet</a><br/>
				</div>
				<div class="col-md-3 menu_dia_box"> 
					<h4><a href="contact.html">contact</a></h4>
					<a href="">Anglet</a><br/>
					<a href="">Anglets for Tens</a><br/>
					<a href="">Blue Stone Anglet</a><br/>
					<a href="">Stone Anglet</a><br/>
					<a href="">Gold Ring Diamond Anglet</a><br/>
				</div>
			</div>
		</div>
	<div class="row"> 
  <!---------------------------------------------------------------------------------->
  <!---------------------------------------------------------------------------------->
  <!------------------------------------Dia_menu End---------------------------------------------->
  <!---------------------------------------------------------------------------------->
  <!---------------------------------------------------------------------------------->



<!---------------------------------------------------------------------------------->
  <!---------------------------------------------------------------------------------->
  <!---------------------------------------------------------------------------------->
  <!---------------------------------------------------------------------------------->
 <!---------------------------------------------------------------------------------->
  <!---------------------------------------------------------------------------------->
  <!-----------------------ASHA_Dia_1st_and_2nd_page_start-------------------------------------------->
  <!---------------------------------------------------------------------------------->
  <!---------------------------------------------------------------------------------->
  <!---------------------------------------------------------------------------------->
  <!---------------------------------------------------------------------------------->
  <!---------------------------------------------------------------------------------->
  <!---------------------------------------------------------------------------------->


  <!----------------***********************************------------->
  <!----------------*****************left_right_step_start(a)******************------------->
  <!----------------***********************************------------->
  		 <div class=" container dai_header_section clearfix">

		<div class="col-md-10  Dai_diamanzza_name">
			<span><?php if(isset($site_data)){ echo $site_data['siteinfo_name']; } ?></span>
			<p><?php if(isset($site_data)){ echo $site_data['siteinfo_slogan']; } ?></p>
		</div>

		<div class="col-md-2 Dia_icon_m"> 
			<img src="Asset/image/2a.png" alt="" />
		</div>

</div>	

  <!----------------***********************************------------->
  <!----------------***************left_right_step_end(a)*****************------------->
  <!----------------***********************************------------->
