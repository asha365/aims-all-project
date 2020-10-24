<?php
  include 'mvc-FRAMEWORK/Configuration/config.php';
  include 'mvc-FRAMEWORK/Library/Database.php';
  $DB = new Database();
?>

<?php /*site info module */
  $qry_site = "SELECT * FROM tb_site WHERE id=1"; 
  $result_site = $DB->select($qry_site); 
  if($result_site){
    $data_site = $result_site->fetch_assoc(); 
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php if(isset($data_site)){ echo $data_site['site_name']; } ?></title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
 <style type="text/css"> 
 .collection{margin-top:2%;}
 
 
 
 </style>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
   <div class="container" style="background:;"> 
     <div class="header">
       <div class="col-md-8 col-xs-12">
	    <h1 style="font-family:Bradley Hand ITC;color:gray;font-size:55px;"><?php if(isset($data_site)){ echo $data_site['site_name']; } ?></h1> <br /> 
         <h4><?php if(isset($data_site)){ echo $data_site['welcome_head']; } ?></h4>
	       <p style="font-family:Agency FB;color:gray;font-size:20px;"><?php if(isset($data_site)){ echo $data_site['welcome_body']; } ?></p>
	    </div>
      <div class="col-md-4 col-xs-12"> 
	    <img src="2.jpg" class="img-responsive" alt="Responsive image" style="">
	 </div>
   </div> <!----header end----> 
   <!------>
   <div class="collection" style="min-height:265px;"> 
      <div class="row"> 
	    <div class="col-md-4 col-xs-12" style="background:#C8EEFF;height:265px;"> 
		    
              <h3 style="text-align:center;">Collection 2019!</h3>
                <p style="text-align:center;font-family:Brush Script MT;font-size:25px;">Creat  <br /> Your <br /> Own Ring!</p>
                <button style="background:black;margin-left:32%;color:white;padding:8px;">More collection</button>
           
		
		</div>
	    <div class="col-md-4 col-xs-12"> 
		  <img src="6.jpg" class="img-responsive" alt="Responsive image" style="width:100%;height:265px;">
		</div>
	    <div class="col-md-4 col-xs-12"> 
		   <div class="row">
           
                <div class="thumbnail" >
                <img src="7.jpg" alt="..." ">
                <div class="caption">
                 <h3 style="font-family:Brush Script MT;text-align:center;font-size:25px;">Diamond Nacklecs</h3>
             <p style="text-align:center;"><a href="https://www.google.com/imgres?imgurl=https%3A%2F%2Fi.ytimg.com%2Fvi%2FLiLPtgJoDE0%2Fmaxresdefault.jpg&imgrefurl=https%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3DLiLPtgJoDE0&docid=9c9vzMJdRggfVM&tbnid=iCR3iNb8T1BnAM%3A&vet=10ahUKEwjbrMWSp4jgAhVGKY8KHQTYCAUQMwhBKAEwAQ..i&w=1280&h=720&bih=675&biw=1517&q=gold%20earing%20collection&ved=0ahUKEwjbrMWSp4jgAhVGKY8KHQTYCAUQMwhBKAEwAQ&iact=mrc&uact=8" style="font-weight:bold;color:black;text-decoration:underline;">contact with us for your better expectation</a></p> </div>
           </div> 
     
    </div>
  </div>
</div>
		
		
		
		
		
		</div> <!----collection end---->
		 
		  <div class="row"> 
		    <div class="col-md-1"></div>
		     <div class="col-md-5"> 
			      <img src="12.jpg" class="img-responsive" alt="Responsive image" style="">
			 </div>
		     <div class="col-md-6" style=""> 
			      <h3 style="text-align:center; padding-top:5px;">Afferduble Fine Jewelry</h3>
                <p style="text-align:center;font-family:Brush Script MT;font-size:25px;">contact with us for your better expectation</p>
			 <br /> 
			 <a href="" style="text-align:center;color:black;text-decoration:underline;font-family:Angsana New ;font-size:20px;padding-left:40%;">Your collection</a>
			 </div>
		   
		  
		
	  </div>
	  <!--------->
	  <section class="section-slider clearfix">
	          <div class="col-md-6 clearfix">
		          <div class="row">
<!---->
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
                    <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                       <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                   <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                 <li data-target="#carousel-example-generic" data-slide-to="3"></li>
               <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                      </ol>

  <!-- Wrapper for slides -->
           <div class="carousel-inner" role="listbox">
              <div class="item active">
                <img src="6.jpg" alt="n/a" style="width:100%; height:280px; ">
    </div>
     <div class="item">
      <img src="3.jpg" alt="n/a" style="width:100%; height:280px; ">
    </div>
     <div class="item">
      <img src="4.jpg" alt="n/a" style="width:100%; height:280px; ">
    </div>
    <div class="item">
      <img src="6.jpg" alt="n/a" style="width:100%; height:280px; ">
    </div>
    <div class="item">
      <img src="5.jpg" alt="n/a" style="width:100%; height:280px; ">
    </div>
  </div>
  
</div>
<!---->
		</div>
	</div>
	<div class="col-md-6 slider-right clearfix">
		<div class="row">
<!------->
<div class="jumbotron text-center" style="margin-bottom:0px; border-radius:0px; color:black; background:#D3B165; height:280px; ">
  <br/><br/><br/>
  <h2>About our Jewelry</h2>
  <p>Dummy text for web slider content. Example text.Dummy text for web slider content.Example text.</p>
</div>
<!------->
		</div>
	</div>
</section>
<!----------->

	  
	  
	  
   
   
   
  
   <!------>
</div>  <!---container end---->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>