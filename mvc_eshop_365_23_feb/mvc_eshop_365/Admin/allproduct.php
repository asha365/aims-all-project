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
                        <h1 class="page-header" style="font-weight: bold; ">All Products
                            <a class="pull-right btn btn-sm btn-primary" href="allproduct.php"><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span></a>
                            <?php  
                                if(isset($_GET['error'])){
                                   echo '<small><span class="glyphicon glyphicon-remove" aria-hidden="true" style="color:red;"></span></small>';  
                                }

                                if(isset($_GET['success'])){
                                    echo '<small><span class="glyphicon glyphicon-ok" aria-hidden="true" style="color:green;"></span></small>';
                                }
                            ?>
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
        $qry_allproduct = "SELECT * FROM tb_mvc_365_product WHERE permission = 1 ORDER BY product_ratings desc";
        $result_allproduct = $DB->select($qry_allproduct);
        if($result_allproduct){
            while ($data_allproduct = $result_allproduct->fetch_array()){
                ?>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail" style="border-radius:0px; ">
                  <img src="../images/products/<?php echo $data_allproduct['product_image'];?>" alt="n/a" style="width:100%; height: 160px; ">
                  <div class="caption text-center">
                    <h3><?php echo $data_allproduct['product_name'];?></h3>
                    <p>Price:<?php echo $data_allproduct['product_price'];?>$</p>
                   <br/>
<div class="btn-group text-center" role="group" aria-label="...">
<?php 
    $rat = $data_allproduct['product_ratings']; 
    if($rat == 1){
?>
  <button type="button" class="btn btn-info btn-xs"><span class="glyphicon glyphicon-star" aria-hidden="true"></span></button>
  <button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-star" aria-hidden="true"></span></button>
  <button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-star" aria-hidden="true"></span></button>
  <button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-star" aria-hidden="true"></span></button>
  <button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-star" aria-hidden="true"></span></button>
<?php 
    }elseif($rat==2){
?>
  <button type="button" class="btn btn-info btn-xs"><span class="glyphicon glyphicon-star" aria-hidden="true"></span></button>
  <button type="button" class="btn btn-info btn-xs"><span class="glyphicon glyphicon-star" aria-hidden="true"></span></button>
  <button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-star" aria-hidden="true"></span></button>
  <button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-star" aria-hidden="true"></span></button>
  <button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-star" aria-hidden="true"></span></button>
<?php 
    }elseif($rat==3){
?>
  <button type="button" class="btn btn-info btn-xs"><span class="glyphicon glyphicon-star" aria-hidden="true"></span></button>
  <button type="button" class="btn btn-info btn-xs"><span class="glyphicon glyphicon-star" aria-hidden="true"></span></button>
  <button type="button" class="btn btn-info btn-xs"><span class="glyphicon glyphicon-star" aria-hidden="true"></span></button>
  <button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-star" aria-hidden="true"></span></button>
  <button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-star" aria-hidden="true"></span></button>
<?php 
    }elseif($rat==4){
?>
  <button type="button" class="btn btn-info btn-xs"><span class="glyphicon glyphicon-star" aria-hidden="true"></span></button>
  <button type="button" class="btn btn-info btn-xs"><span class="glyphicon glyphicon-star" aria-hidden="true"></span></button>
  <button type="button" class="btn btn-info btn-xs"><span class="glyphicon glyphicon-star" aria-hidden="true"></span></button>
  <button type="button" class="btn btn-info btn-xs"><span class="glyphicon glyphicon-star" aria-hidden="true"></span></button>
  <button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-star" aria-hidden="true"></span></button>
<?php 
    }elseif($rat==5){
?>
  <button type="button" class="btn btn-info btn-xs"><span class="glyphicon glyphicon-star" aria-hidden="true"></span></button>
  <button type="button" class="btn btn-info btn-xs"><span class="glyphicon glyphicon-star" aria-hidden="true"></span></button>
  <button type="button" class="btn btn-info btn-xs"><span class="glyphicon glyphicon-star" aria-hidden="true"></span></button>
  <button type="button" class="btn btn-info btn-xs"><span class="glyphicon glyphicon-star" aria-hidden="true"></span></button>
  <button type="button" class="btn btn-info btn-xs"><span class="glyphicon glyphicon-star" aria-hidden="true"></span></button>
<?php         
    }else{
?>
  <button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-star" aria-hidden="true"></span></button>
  <button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-star" aria-hidden="true"></span></button>
  <button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-star" aria-hidden="true"></span></button>
  <button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-star" aria-hidden="true"></span></button>
  <button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-star" aria-hidden="true"></span></button>
<?php 
    }
?>
</div>
                    <hr/>
                    <p class="text-center">
                        <a href="" data-toggle="modal" data-toggle="modal" data-target="#product_view<?php echo $data_allproduct['product_id']; ?>" class="btn btn-primary btn-sm" role="button"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>



                        <a href="editproduct.php?producteditid=<?php echo $data_allproduct['product_id'];?>" class="btn btn-warning btn-sm" role="button"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>


<?php /*PRODUCT BLOC/UNBLOCK OPOTION */ if($data_allproduct['product_status']==1){ ?>    
                        <a href="?pr_unblock=<?php echo $data_allproduct['product_id']; ?>" class="btn btn-default btn-sm" role="button"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></a>
<?php  }else{ ?>    
                        <a href="?pr_block=<?php echo $data_allproduct['product_id']; ?>" class="btn btn-info btn-sm" role="button"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></a>
<?php  } /*BLOCK-UNBLOCK ENDS*/ ?>


                        <a href="allproduct.php?deleteid=<?php echo $data_allproduct['product_id'];?>&delete_image=<?php echo $data_allproduct['product_image'];?>" class="btn btn-danger btn-sm" role="button"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                    </p>
                  </div>
                </div>
              </div>


<!--------------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------------->
<!-- Modal -->
<div class="modal fade" id="product_view<?php echo $data_allproduct['product_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel" style="font-weight:bold;color:purple;"><?php echo $data_allproduct['product_name'];?></h4>
      </div>
      <div class="modal-body">
        <?php 
/*get category name by product tbl cat id*/
$get_catname = "SELECT * FROM tb_mvc_365_category WHERE category_id='".$data_allproduct['cat_id']."'"; 
$catname_result = $DB->select($get_catname); 
if($catname_result){ $catname_data = $catname_result->fetch_assoc(); }
/*---------------------------------------------*/
/*get category name by product tbl cat id*/
$get_subcatname = "SELECT * FROM tb_mvc_365_subcategory WHERE subcategory_id='".$data_allproduct['subcat_id']."'"; 
$subcatname_result = $DB->select($get_subcatname); 
if($subcatname_result){ $subcatname_data = $subcatname_result->fetch_assoc(); }
/*---------------------------------------------*/

        	echo '<b>Product Cat_id: </b>'.$catname_data['category_name'].'<br/>';
        	echo '<b>Product Subcat_id: </b>'.$subcatname_data['subcategory_name'].'<br/>';
        	echo '<b>Product Name: </b>'.$data_allproduct['product_name'].'<br/>';
        	echo '<b>Company Name: </b>'.$data_allproduct['product_company'].'<br/>';
        	echo '<b>Product Details: </b>'.$data_allproduct['product_description'].'<br/>';
        	echo '<b>Product Offfers: </b>'.$data_allproduct['product_offers'].'<br/>';
        	echo '<b>Product price: </b>'.$data_allproduct['product_price'].'.00tk.<br/>';
        ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!--------------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------------->
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