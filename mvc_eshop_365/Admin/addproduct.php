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
                        <h1 class="page-header" style="font-weight: bold; ">Add Products
                            <a class="pull-right btn btn-sm btn-primary" href="addproduct.php"><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span></a>
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
        <form role="form" action="" method="POST" enctype="multipart/form-data">

              <div class="form-group">
                <label for="exampleInputEmail1">Category</label>

                <select class="form-control" name="cat_id">
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
                    <option value="">Select Category !</option>
                    <?php
                        $qry_subcat_id = " SELECT * FROM tb_mvc_365_subcategory WHERE subcategory_status= 0 ";
                        $subcat_id_result = $DB->select($qry_subcat_id);
                        if($subcat_id_result){
                            while($subcat_product_data = $subcat_id_result->fetch_array()){
                                  
                                    ?>

                    <option value="<?php echo $subcat_product_data['subcategory_id']; ?>"><?php echo $subcat_product_data['subcategory_name']; ?></option>
                        <?php 
                     
                            }
                        }
                    ?>
                </select>

              </div> 
            <div class="form-group">
                <label >Product Name</label> 
                 <input name="product_name" class="form-control" placeholder="Product Name">
            </div>

            <div class="form-group">
                <label>Company Name</label>
                <input name="product_company" class="form-control" placeholder="Company Product ">
            </div>

            <div class="form-group">
                <label>Product Description</label>
                <textarea name="product_description" class="form-control" rows="4" ></textarea>
            </div>

            <div class="form-group">
                <label>Product Offer</label>
                <input name="product_offers" class="form-control" placeholder="Product offer">
            </div>
<!--
            <div class="form-group">
                <label>Product Quantity</label>
                <input name="product_quantity" class="form-control" placeholder="Product Quantity">
            </div>
-->
            <div class="form-group">
                <label>product price</label>
                  <input name="product_price" class="form-control" placeholder="product price">
            </div>
            <div class="form-group">
                <label>product image <label>
                 <input name="product_image" type="file" />
            </div>

            <button name="product_save" type="submit" class="btn btn-primary">Add New Product </button>
             <?php if(isset($_GET['msg'])){echo $_GET ['msg'];  } ?>

      </form>
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