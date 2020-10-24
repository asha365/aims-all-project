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

            <div class="inner" style="min-height:700px;">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header" style="font-weight: bold; ">Pending Product !
                            <a class="pull-right btn btn-sm btn-primary" href="allproduct.php"><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span></a>
                            <?php  if(isset($_GET['msg'])){ echo $_GET['msg']; } ?>
                        </h1>
                    </div>
                </div> 

                <hr />
<div class="col-lg-12">
    <div class="row">
<!----------------------------------------------------------------------->
<!----------------------------------------------------------------------->
<!----------------------------------------------------------------------->
    <?php //insert  images 
        $qry_allproduct = "SELECT * FROM tb_mvc_365_product WHERE permission = 0 ORDER BY product_ratings desc";
        $result_allproduct = $DB->select($qry_allproduct);
        if($result_allproduct){
            while ($data_allproduct = $result_allproduct->fetch_array()){
                ?>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail" style="border-radius:0px; ">
                  <img src="../images/products/<?php echo $data_allproduct['product_image'];?>" alt="n/a" style="width:100%; height: 160px; ">
                  <div class="caption text-center">
                    <h3><?php echo $data_allproduct['product_name'];?></h3>
                    <p><?php echo $data_allproduct['product_price'];?></p>
                   <br/>
<div class="btn-group text-center" role="group" aria-label="...">
  <a href="pendingproduct.php?pending_id=<?php echo $data_allproduct['product_id']; ?>" class="btn btn-sm btn-primary">Approve Now !</a>
</div>  
                    <hr/>
                    <p class="text-center">
                        <a href="allproduct.php?update_product_id=<?php echo $data_allproduct['product_id']; ?>" class="btn btn-warning btn-sm" role="button"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> 
                        <a href="#" class="btn btn-info btn-sm" role="button"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></a>
                        <a href="allproduct.php?deleteid=<?php echo $data_allproduct['product_id'];?>&delete_image=<?php echo $data_allproduct['product_image'];?>" class="btn btn-danger btn-sm" role="button"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                    </p>
                  </div>
                </div>
              </div>
    <?php
            }
        }
    ?>
<!----------------------------------------------------------------------->
<!----------------------------------------------------------------------->
<!----------------------------------------------------------------------->
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