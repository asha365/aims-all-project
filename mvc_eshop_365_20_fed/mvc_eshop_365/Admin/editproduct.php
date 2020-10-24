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
                        <h1 class="page-header" style="font-weight: bold; ">Edit Products
                            <a class="pull-right btn btn-sm btn-primary" href="editproduct.php"><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span></a>
                            <?php  if(isset($_GET['msg'])){ echo $_GET['msg']; } ?>
                        </h1>
                    </div>
                </div> 

                <hr />
    	 <!----------------------------------------------------->
    	 <div class="col-lg-1"></div>
 <div class="col-lg-10">
 	<?php 
 	if (isset($edit_product_data)) 
    {
 	?>

 	  <form role="form" action="editproduct.php" method="POST" enctype="multipart/form-data">

			<input type="text" value="<?php echo $editid;?>" name="edit_id" />
  <input type="text" name="old_image" value="<?php echo $edit_product_data['product_image']; ?>">
              <div class="form-group">
                <label for="exampleInputEmail1">Category</label>
                <select class="form-control" name="cat_id" value="<?php if(isset($edit_product_data)){echo $edit_product_data['cat_id'];}?>">
                    <option value="">Select Category !</option>
                        <?php 
                            $cat_qry = "SELECT * FROM tb_mvc_365_category WHERE category_status=0"; 
                            $cat_result = $DB->select($cat_qry);
                            if($cat_result){
                                while($cat_data = $cat_result->fetch_array()){
                        ?>
                                            <option value="<?php echo $cat_data['category_id']; ?>"><?php echo $cat_data['category_name']; ?></option>
                        <?php 
                                }//end of while...
                            }//end of if..
                        ?>
                 </select>

              </div> 


              <div class="form-group">
                <label for="exampleInputEmail1">Subcategory</label>

                <select class="form-control" name="subcat_id">
<?php /*get all subcategory name from subcat table by product table subcatid.. */
    $subscat_qry = "SELECT * FROM tb_mvc_365_subcategory WHERE subcategory_status=0"; 
    $subscat_result = $DB->select($subscat_qry);
    if($subscat_result){
        while($subscat_data = $subscat_result->fetch_array()){
?>                   
<option value="<?php echo $subscat_data['subcategory_id']; ?>" <?php  if($edit_product_data['subcat_id']==$subscat_data['subcategory_id']){ echo 'selected'; } ?> ><?php echo $subscat_data['subcategory_name']; ?></option>
<?php 
    }//end of sub cat list while..
}//end of sub cat list if..
?>
                </select>

              </div> 
            <div class="form-group">
                <label >Product Name</label> 
                 <input name="product_name" class="form-control" value="<?php if(isset($edit_product_data)){echo $edit_product_data['product_name'];}?>">
            </div>

            <div class="form-group">
                <label>Company Name</label>
                <input name="product_company" class="form-control" value="<?php if(isset($edit_product_data)){echo $edit_product_data['product_company'];}?>">
            </div>

            <div class="form-group">
                <label>Product Description</label>
                <textarea name="product_description" class="form-control" rows="4" ><?php if(isset($edit_product_data)){echo $edit_product_data['product_description'];}?></textarea>
            </div>

            <div class="form-group">
                <label>Product Offer</label>
                <input name="product_offers" class="form-control"  value="<?php if(isset($edit_product_data)){echo $edit_product_data['product_offers'];}?>">
            </div>
<!--
            <div class="form-group">
                <label>Product Quantity</label>
                <input name="product_quantity" class="form-control" placeholder="Product Quantity">
            </div>
-->
            <div class="form-group">
                <label>product price</label>
                  <input name="product_price" class="form-control" value="<?php if(isset($edit_product_data)){echo $edit_product_data['product_price'];}?>">
            </div>
            <div class="form-group">
   				 <img src="../images/products/<?php echo $edit_product_data['product_image'];?>"alt="" style="width:100%;height:300px;">
                <label>product image <label>
                 <input name="product_image" type="file" />
            </div>

            <button name="product_edit" type="submit" class="btn btn-warning"> Edit Product </button>
             <?php if(isset($_GET['msg'])){echo $_GET ['msg'];  } ?>

    </form>
<?php 
    }else{
        echo '404 Not Found !'; 
    }/*end of if isset..*/
?>
 </div>
 <div class="col-lg-1"></div>
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