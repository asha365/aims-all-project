<?php  /*mvc framework setup*/
	include '../mvc-FRAMEWORK/Library/Session.php';/*session file included*/
	Session::init();
//	Session::checkSessionReturn(); 

	include '../mvc-FRAMEWORK/Configuration/config.php';/*database info file included*/
	include '../mvc-FRAMEWORK/Library/Database.php';/*database qry file included*/

	$DB = new Database();/*object of Database Class*/	
?>
<?php /*login machanism*/
	if(isset($_POST['login'])){
		$user_id = $_POST['userid'];
		$user_password=$_POST['password']; 

		if(empty($user_id) OR empty($user_password)){
			$msg = '<span style="color:red;">Invalid Username / Password'; 
			header('Location:?msg='.$msg);  
		}else{
			$password = md5($user_password);
      $user_qry = "SELECT * FROM tb_mvc_365_user WHERE user_name='$user_id' AND user_password='$password'"; 
      $user_result = $DB->select($user_qry); 
      if($user_result){
        $user = $user_result->fetch_assoc(); 
        //var_dump($user); die();
        if($user){
            Session::set('login',true);
            Session::set('username',$user['user_name']);
            Session::set('userrole',$user['user_role']);
            
            Header('Location:../Admin/'); 
        }  
      }
		}
	}
?>
<?php if(isset($_GET['msg'])){ $msg = $_GET['msg']; } ?>

<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- BEGIN HEAD -->
<head>
     <meta charset="UTF-8" />
    <title>AIMS-365 | Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="" name="description" />
  <meta content="" name="author" />
     <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <!-- GLOBAL STYLES -->
     <!-- PAGE LEVEL STYLES -->
     <link rel="stylesheet" href="../Admin/assets/plugins/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="../Admin/assets/css/login.css" />
    <link rel="stylesheet" href="../Admin/assets/plugins/magic/magic.css" />
     <!-- END PAGE LEVEL STYLES -->
   <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
    <!-- END HEAD -->

    <!-- BEGIN BODY -->
<body >

   <!-- PAGE CONTENT --> 
    <div class="container" style="margin-top:10vh; ">
    <div class="text-center" style="margin-bottom: -30px; ">
        <img src="../Admin/assets/img/logo.png" id="logoimg" alt=" Logo" style="height: 90px;" />
    </div>
    <div class="tab-content">
        <div id="login" class="tab-pane active">
            <form action="" method="post" class="form-signin">
                <input name="userid" type="text" placeholder="Username" class="form-control" />
                <input name="password" type="password" placeholder="Password" class="form-control" />
                <button name="login" class="btn text-muted text-center btn-danger" type="submit">Sign in</button>
                <?php /*error message*/ if(isset($msg)){ echo $msg;  } ?>
            </form>
        </div>
    </div>



</div>

    <!--END PAGE CONTENT -->     
        
      <!-- PAGE LEVEL SCRIPTS -->
      <script src="../Admin/assets/plugins/jquery-2.0.3.min.js"></script>
      <script src="../Admin/assets/plugins/bootstrap/js/bootstrap.js"></script>
   <script src="../Admin/assets/js/login.js"></script>
      <!--END PAGE LEVEL SCRIPTS -->

</body>
    <!-- END BODY -->
</html>
