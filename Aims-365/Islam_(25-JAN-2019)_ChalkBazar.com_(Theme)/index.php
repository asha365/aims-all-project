<?php
  include 'mvc-FRAMEWORK/Configuration/config.php';
  include 'mvc-FRAMEWORK/Library/Database.php';
  $DB = new Database();
?>

<?php 
  $theme_qry = "SELECT * FROM tb_theme"; 
  $theme_result = $DB->select($theme_qry); 
  if($theme_result){
    $theme_data = $theme_result->fetch_assoc(); 
    if($theme_data){
      echo $theme = $theme_data['themename']; 
      header('Location:'.$theme.'/'); 
    }
  }
?>