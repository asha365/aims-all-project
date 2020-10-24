<!--------------------------->
<!------------------------------------>
<!-------------------------------------------->
<!----------------------------------------------------->
<!-------------------------------------------------------------------->
<!-------------------------------------------------------------------->
<?php  include 'header.php';  ?>
<?php  include 'sidebar.php';  ?>
<!-------------------------------------------------------------------->
<!-------------------------------------------------------------------->
<!-------------------------------------------------------------------->


        <!--PAGE CONTENT -->
        <div id="content">

            <div class="inner">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header" style="font-weight: bold; ">Site Settings &mdash; Themes 
                        	<a class="pull-right btn btn-sm btn-primary" href="themes.php"><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span></a>
                            <?php  if(isset($_GET['msg'])){ echo $_GET['msg']; } ?>
                        </h1>
                    </div>
                </div>             
                <hr />
<!------------------------------------------------------------------>

                <div class="row">

  <div class="col-lg-12">
    <ul class="pricing-table" >
<?php 
	$theme_qry = "SELECT * FROM tb_mvc_365_theme";
	$theme_result = $DB->select($theme_qry); 
	if($theme_result){
		while($theme = $theme_result->fetch_array()){
			if($theme['theme_status']==0){
?>
	<li class="col-lg-3" style="margin-bottom: 50px;">
		<h3><?php echo $theme['theme_name']; ?></h3>
		<div class="col-md-12">
			<img src="../themes/<?php echo $theme['theme_name']; ?>/<?php echo $theme['theme_thumbnails']; ?>" class="img img-responsive" style="width:100%; height:200px;">
		</div>
		<div class="features">
			<ul>
				<li>Expired AT &mdash; <?php echo $theme['theme_expired_at']; ?></li>
			</ul>
		</div>
		<div class="footer">
			<a href="themes.php?th_id=<?php echo $theme['theme_id']; ?>" class="btn btn-info btn-rect">Active Now</a>
		</div>
	</li>
<?php 
			}else{
?>
<li class="active danger col-lg-3" style="margin-bottom: 50px;">
		<h3><?php echo $theme['theme_name']; ?></h3>
		<div class="row">
			<img src="../themes/<?php echo $theme['theme_name']; ?>/<?php echo $theme['theme_thumbnails']; ?>" class="img img-responsive" style="width:100%; height:200px;">
		</div>
		<div class="features">
			<ul>
				<li>Expired AT &mdash; <?php echo $theme['theme_expired_at']; ?></li>
			</ul>
		</div>
		<div class="footer">
			<a href="#" class="btn btn-metis-1 btn-lg btn-rect">Activated</a>
		</div>
	</li>
<?php 				
			}//end of else..
?>
	
<?php  
		}//end of while...
	}//end of top if....
?>

<!--
	<li class="col-lg-4">
		<h3>Starter</h3>
		<div class="price-body">
			<div class="price">
				Free
			</div>
		</div>
		<div class="features">
			<ul>
				<li>Premium Profile Listing</li>
				<li>Unlimited File Access</li>
				<li>Free Appointments</li>
				<li><strong>5 Bonus Points</strong> every month</li>
				<li>Customizable Profile Page</li>
				<li><strong>2 months</strong> support</li>
			</ul>
		</div>
		<div class="footer">
			<a href="#" class="btn btn-info btn-rect">Get Started 1</a>
		</div>
	</li>

	<li class="active danger col-lg-4">
		<h3>Basic</h3>
		<div class="price-body">
			<div class="price">
				<span class="price-figure"><sup>$</sup>24<small>.99</small></span>
				<span class="price-term">per month</span>
			</div>
		</div>
		<div class="features">
			<ul>
				<li>Premium Profile Listing</li>
				<li>Unlimited File Access</li>
				<li>Free Appointments</li>
				<li><strong>20 Bonus Points</strong> every month</li>
				<li>Customizable Profile Page</li>
				<li><strong>6 months</strong> support</li>
			</ul>
		</div>
		<div class="footer">
			<a href="#" class="btn btn-metis-1 btn-lg btn-rect">Get Started 2</a>
		</div>
	</li>

	<li class="col-lg-4">
		<h3>Premium</h3>
		<div class="price-body">
			<div class="price">
				<span class="price-figure"><sup>$</sup>49<small>.99</small></span>
				<span class="price-term">per month</span>
			</div>
		</div>
		<div class="features">
			<ul>
				<li>Premium Profile Listing</li>
				<li>Unlimited File Access</li>
				<li>Free Appointments</li>
				<li><strong>50 Bonus Points</strong> every month</li>
				<li>Customizable Profile Page</li>
				<li><strong>Lifetime</strong> support</li>
			</ul>
		</div>
		<div class="footer">
			<a href="#" class="btn btn-info btn-rect">Get Started 3</a>
		</div>
	</li>
-->
</ul>

		<div class="clearfix"></div>
	</div>
</div>
                                  

            </div>




        </div>
        <!--END PAGE CONTENT -->










<!-------------------------------------------------------------------->
<!-------------------------------------------------------------------->
<?php include 'footer.php'; ?>
<!-------------------------------------------------------------------->
<!---------------------------------------------------------------->
<!----------------------------------------------------->
<!-------------------------------------------->
<!------------------------------------>
<!--------------------------->