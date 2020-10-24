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
    	 <!----------------------------------------------------->
    	 <div class="col-lg-1"></div>
 <div class="col-lg-10">
 	<?php /*edit product start............*/
 	if (isset($edit_product_data)) 
    {
 	?>
<!------------------------------------------------------------------------------------------------------------->
<!---------------------------------- product edit from start--------------------------------------------------->
<!------------------------------------------------------------------------------------------------------------->

  <form role="form" action="editproduct.php" method="POST" enctype="multipart/form-data">

	<input type="hidden" value="<?php echo $editid;?>" name="edit_id" />

 	 <input type="hidden" name="old_image" value="<?php echo $edit_product_data['product_image']; ?>"/>


<!---------------------------------------------------------------->
<!---------------------category edit---------------------------->
<!---------------------------------------------------------------->
              <div class="form-group">
                <label for="exampleInputEmail1">Category</label>
                <select class="form-control" name="cat_id" >

					<?php /*get all category name from subcat table by product tablecat_id.. */
					    $cats_qry = "SELECT * FROM tb_mvc_365_category WHERE category_status=0"; 
					    	$cats_result = $DB->select($cats_qry);
					   			 if($cats_result){
					      			  while($cats_data = $cats_result->fetch_array()){
										?>                   
										<option value="<?php echo $cats_data['category_id']; ?>" <?php  if($edit_product_data['cat_id']==$cats_data['category_id']){ echo 'selected'; } ?> ><?php echo $cats_data['category_name']; ?></option>
						<?php 
					    }//end of  while..
					}//end of  if..
					?>
                 </select>

              </div> 


<!---------------------------------------------------------------->
<!---------------------subcategory edit---------------------------->
<!---------------------------------------------------------------->
              <div class="form-group">
                <label for="exampleInputEmail1">Subcategory</label>

                <select class="form-control" name="subcat_id">
					<?php /*get all subcategory name from subcat table by product table subcatid.. */
					    $subscat_qry = "SELECT * FROM tb_mvc_365_subcategory WHERE subcategory_status=0"; 
					  			  $subscat_result = $DB->select($subscat_qry);
					  				  if($subscat_result){
					   				     while($subscat_data = $subscat_result->fetch_array()){
					?>                   
												<option value="<?php echo $subscat_data['subcategory_id']; ?>" <?php  if($edit_product_data['subcat_id']==$subscat_data['subcategory_id']){ echo 'selected'; } ?> >
                                                    <?php echo $subscat_data['subcategory_name']; ?>
                                                        
                                                    </option>
					<?php 
					                       }//end of sub cat list while..
					                   }//end of sub cat list if..
					?>
                </select>

              </div> 

<!---------------------------------------------------------------->
<!---------------------Product name edit---------------------------->
<!---------------------------------------------------------------->
            <div class="form-group">
                <label >Product Name</label> 
                 <input name="product_name" class="form-control" value="<?php if(isset($edit_product_data)){echo $edit_product_data['product_name'];}?>">
            </div>

<!---------------------------------------------------------------->
<!---------------------Product company name edit---------------------------->
<!---------------------------------------------------------------->
            <div class="form-group">
                <label>Company Name</label>
                <input name="product_company" class="form-control" value="<?php if(isset($edit_product_data)){echo $edit_product_data['product_company'];}?>">
            </div>

<!---------------------------------------------------------------->
<!---------------------Product Description edit---------------------------->
<!---------------------------------------------------------------->

            <div class="form-group">
                <label>Product Description</label>
                <textarea name="product_description" class="form-control" rows="4" ><?php if(isset($edit_product_data)){echo $edit_product_data['product_description'];}?></textarea>
            </div>

<!---------------------------------------------------------------->
<!---------------------Product Offers edit---------------------------->
<!---------------------------------------------------------------->

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

<!---------------------------------------------------------------->
<!---------------------Product Price edit---------------------------->
<!---------------------------------------------------------------->

            <div class="form-group">
                <label>product price</label>
                  <input name="product_price" class="form-control" value="<?php if(isset($edit_product_data)){echo $edit_product_data['product_price'];}?>">
            </div>

<!---------------------------------------------------------------->
<!---------------------Product images edit---------------------------->
<!---------------------------------------------------------------->
            <div class="form-group">
   				 <img src="../images/products/<?php echo $edit_product_data['product_image'];?>"alt="" style="width:100%;height:300px;">
                <label>product image <label>
                 <input name="product_image" type="file" />
            </div>

<!---------------------------------------------------------------->
<!---------------------Product Button  edit---------------------------->
<!---------------------------------------------------------------->

            <button name="product_edit" type="submit" class="btn btn-warning"> Edit Product </button>
             <?php if(isset($_GET['msg'])){echo $_GET ['msg'];  } ?>

    </form>

<!------------------------------------------------------------------------------------------------------------->
<!---------------------------------- product edit from start--------------------------------------------------->
<!------------------------------------------------------------------------------------------------------------->

<?php 
    }else{/*page  not found*/
        echo '<script>window.location="../Logout.php"</script>'; 
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