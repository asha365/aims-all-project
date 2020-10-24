<?php /*TOTAL THEME COUNTS */
    $amount_theme_qry = "SELECT * FROM tb_mvc_365_theme";
    $amount_theme_result = $DB->select($amount_theme_qry); 
    if($amount_theme_result)
    {
         $thcount = mysqli_num_rows($amount_theme_result);
    }
?>
 <?php /*TOTAL CATEGORY COUNTS.. */
    $amount_cat_qry = "SELECT * FROM tb_mvc_365_category";
    $amount_cat_result = $DB->select($amount_cat_qry); 
    if($amount_cat_result)
    {
         $catcount = mysqli_num_rows($amount_cat_result);
    }
?>

        <!-- MENU SECTION -->
       <div id="left" >
            <div class="media user-media well-small">
                <a class="user-link" href="#">
                    <img class="media-object img-thumbnail user-img" alt="User Picture" src="assets/img/user.gif" />
                </a>
                <br />
                <div class="media-body">
                    <h5 class="media-heading"><?php echo strtoupper(Session::get('username')); ?></h5>
                    <ul class="list-unstyled user-info">
                        <li>
                            <a class="btn btn-success btn-xs btn-circle" style="width: 10px;height: 12px;"></a> Online
                        </li>
                    </ul>
                </div>
                <br />
            </div>

            <ul id="menu" class="collapse">
                <li class="panel active">
                    <a href="index.php" >
                        <i class="icon-table"></i> Dashboard	   
                    </a>                   
                </li>
                <li class="panel ">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                        <i class="icon-tasks"> </i> Site Options    
                        <span class="pull-right">
                          <i class="icon-angle-left"></i>
                        </span>
                    </a>
                    <ul class="collapse" id="component-nav">
                       
                        <li class=""><a href="themes.php"><i class="icon-angle-right"></i>Theme Options &nbsp; <span class="label label-default"><?php if(isset($thcount)){echo $thcount; }else{ echo 0; } ?></span>&nbsp;</a></li>
                         <li class=""><a href="site_settings.php"><i class="icon-angle-right"></i> Site Settings </a></li>
                         <li class=""><a href="site_settings.php"><i class="icon-angle-right"></i> Site Logo </a></li>
                    </ul>
                </li>

                <li class="panel">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#chart-nav">
                        <i class="icon-sitemap"></i> Menu Options
                        <span class="pull-right"> <i class="icon-angle-left"></i></span>
                    </a>
                    <ul class="collapse" id="chart-nav">
                        <li><a href="category.php"><i class="icon-angle-right"></i> Category &nbsp; <span class="label label-danger"><?php if(isset($catcount)){echo $catcount; }else{ echo 0; } ?> </span>&nbsp;</a></li>
                        <li><a href="sub_category.php"><i class="icon-angle-right"></i> Sub-Category &nbsp; <span class="label label-danger">4</span>&nbsp;</a></li>
                    </ul>
                </li>

                <li class="panel">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#pagesr-nav">
                        <i class="icon-table"></i> Product Options
       
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                          &nbsp; <span class="label label-info">6</span>&nbsp;
                    </a>
                    <ul class="collapse" id="pagesr-nav">
                        <li><a href="addproduct.php"><i class="icon-angle-right"></i> Add Product </a></li>
                        <li><a href="allproduct.php"><i class="icon-angle-right"></i> All Product </a></li>
                        <li><a href="pendingproduct.php"><i class="icon-angle-right"></i> Pending Product </a></li>
                        <li><a href="blockedproduct.php"><i class="icon-angle-right"></i> Blocked Product </a></li>
                    </ul>
                </li>

                <li class="panel ">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle collapsed" data-target="#form-nav">
                        <i class="icon-pencil"></i> Pages & Posts 
	   
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                          &nbsp; <span class="label label-success">5</span>&nbsp;
                    </a>
                    <ul class="collapse" id="form-nav">
                        <li class=""><a href="pages.php"><i class="icon-angle-right"></i> Pages</a></li>
                        <li class=""><a href="postlist.php"><i class="icon-angle-right"></i> Posts </a></li>
                    </ul>
                </li>

                <li><a href="gallery.html"><i class="icon-film"></i> Image Gallery </a></li>
                <li><a href="gallery.html"><i class="icon-film"></i> Slider Options </a></li>
                <li class="panel">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#DDL-nav">
                        <i class=" icon-sitemap"></i> Sponsor's 
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                    </a>
                    <ul class="collapse" id="DDL-nav">
                        <li>
                            <a href="#" data-parent="#DDL-nav" data-toggle="collapse" class="accordion-toggle" data-target="#DDL1-nav">
                                <i class="icon-sitemap"></i>&nbsp; Product Category
	   
                        <span class="pull-right" style="margin-right: 20px;">
                            <i class="icon-angle-left"></i>
                        </span>


                            </a>
                            <ul class="collapse" id="DDL1-nav">
                                <li><a href="#"><i class="icon-angle-right"></i> Hati </a></li>
                                <li><a href="#"><i class="icon-angle-right"></i> Ghora </a></li>
                                <li><a href="#"><i class="icon-angle-right"></i> Demo Link 3 </a></li>

                            </ul>

                        </li>
                        <li><a href="#"><i class="icon-angle-right"></i> Demo Link 2 </a></li>
                        <li><a href="#"><i class="icon-angle-right"></i> Demo Link 3 </a></li>
                        <li><a href="#"><i class="icon-angle-right"></i> Demo Link 4 </a></li>
                    </ul>
                </li>
                <li class="panel">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#DDL4-nav">
                        <i class=" icon-folder-open-alt"></i> Messages & Comments
	   
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                    </a>
                    <ul class="collapse" id="DDL4-nav">
                        <li>
                            <a href="#" data-parent="DDL4-nav" data-toggle="collapse" class="accordion-toggle" data-target="#DDL4_1-nav">
                                <i class="icon-sitemap"></i>&nbsp; Demo Link 1
	   
                        <span class="pull-right" style="margin-right: 20px;">
                            <i class="icon-angle-left"></i>
                        </span>


                            </a>
                            <ul class="collapse" id="DDL4_1-nav">
                                <li>

                                    <a href="#" data-parent="#DDL4_1-nav" data-toggle="collapse" class="accordion-toggle" data-target="#DDL4_2-nav">
                                        <i class="icon-sitemap"></i>&nbsp; Demo Link 1
	   
                        <span class="pull-right" style="margin-right: 20px;">
                            <i class="icon-angle-left"></i>
                        </span>
                                    </a>
                                    <ul class="collapse" id="DDL4_2-nav">



                                        <li><a href="#"><i class="icon-angle-right"></i> Demo Link 1 </a></li>
                                        <li><a href="#"><i class="icon-angle-right"></i> Demo Link 2 </a></li>
                                    </ul>



                                </li>
                                <li><a href="#"><i class="icon-angle-right"></i> Demo Link 2 </a></li>
                                <li><a href="#"><i class="icon-angle-right"></i> Demo Link 3 </a></li>
                            </ul>

                        </li>
                        <li><a href="#"><i class="icon-angle-right"></i> Demo Link 2 </a></li>
                        <li><a href="#"><i class="icon-angle-right"></i> Demo Link 3 </a></li>
                        <li><a href="#"><i class="icon-angle-right"></i> Demo Link 4 </a></li>
                    </ul>
                </li>
                <li><a href="gallery.html"><i class="icon-user"></i> User Options </a></li>

                
                <li><a href="../Logout.php"><i class="icon-signin"></i> Logout </a></li>

            </ul>

        </div>
        <!--END MENU SECTION -->