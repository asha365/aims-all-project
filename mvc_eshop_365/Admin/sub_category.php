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
<!--================================================================-->
<!--================================================================-->
<!--================================================================-->
<!--================================================================-->
<!--================================================================-->
<!--================================================================-->

<!-------------------------------------------------------------------->
<!-------------------------------------------------------------------->
        <!--PAGE CONTENT -->
        <div id="content">

            <div class="inner">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header" style="font-weight: bold; ">Sub-Category Options 
                            <a class="pull-right btn btn-sm btn-primary" href="sub_category.php"><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span></a>
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


                <div class="row">
                <div class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Category in Data Tables
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Sub Category Name</th>
                                            <th>Category</th>
                                            <th>Status</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
<!-------------------------------------------------------------------->
<!-------------------------------------------------------------------->
<?php 
    $subcategory_qry = "SELECT * FROM tb_mvc_365_subcategory"; 
    $subcategory_result = $DB->select($subcategory_qry); 
    if($subcategory_result){
        $sl=0; 
        while($subcategory_data = $subcategory_result->fetch_array()){
            $sl++; 
?>
                                        <tr class="gradeX">
                                            <td><?php echo $sl; ?></td>
                                            <td><?php echo $subcategory_data['subcategory_name']; ?></td>
                                            <td><?php echo $subcategory_data['subcategory_catid']; ?></td>
                                            <td style="text-align: center; "><?php 
                                             if($subcategory_data['subcategory_status']==1){
?>
<div class="btn-group" role="group" aria-label="...">
  <a href="sub_category.php?subcat_st_idon=<?php echo $subcategory_data['subcategory_id']; ?>" type="button" class="btn btn-xs btn-info">ON</a>
  <a type="button" class="btn btn-xs btn-default">OFF</a>
</div>
<?php }else{ ?>
<div class="btn-group" role="group" aria-label="...">
  <a type="button" class="btn btn-xs btn-default">ON</a>
  <a href="sub_category.php?subcat_st_idoff=<?php echo $subcategory_data['subcategory_id']; ?>" type="button" class="btn btn-xs btn-info">OFF</a>
</div>
<?php } ?>
                                            </td>
                                            <td class="center" style="text-align: center;">
                                                <a href="sub_category.php?subcat_edid=<?php echo $subcategory_data['subcategory_id']; ?>" class="btn btn-xs btn-primary"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
                                                <a href="sub_category.php?subcat_delid=<?php echo $subcategory_data['subcategory_id']; ?>" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                                            </td>
                                        </tr>
<?php             
        }//end of while....        
    }//end of if...
?>
<!-------------------------------------------------------------------->

  <!--
                                        <tr class="gradeU">
                                            <td>Other browsers</td>
                                            <td>All others</td>
                                            <td>-</td>
                                            <td class="center">-</td>
                                            <td class="center">U</td>
                                        </tr>
-->
                                    </tbody>
                                </table>
                            </div>
                           
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
<!------------------------------------------------------------------------->
<?php 
    if(isset($sub_cat_fetch_data))
    {
?>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Update Sub-Category !
                        </div>
                        <div class="panel-body">
<!-------------------------------------------------------------------->
<form class="form" method="post" action="sub_category.php">
  <input type="hidden" name="subcategory_id" value="<?php echo $sub_cat_fetch_data['subcategory_id']; ?>">
  <div class="form-group">
    <label for="exampleInputEmail1">Select Category</label>
    <select class="form-control" name="subcategory_catid">
        <option value="">Select Category !</option>
<?php 
    $cat_qry = "SELECT * FROM tb_mvc_365_category  WHERE category_status=0"; 
    $cat_result = $DB->select($cat_qry);
    if($cat_result){
        while($catdata = $cat_result->fetch_array()){
?>
        <option value="<?php echo $catdata['category_id']; ?>" <?php if($catdata['category_id'] == $sub_cat_fetch_data['subcategory_catid']){ echo 'selected'; } ?> > <?php echo $catdata['category_name']; ?> </option>
<?php             
        }
    }  
?>

    </select>
  </div> 
  <div class="form-group">
    <label for="exampleInputEmail1">Sub Category</label>
    <input name="subcategory_name" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Category Name" value="<?php echo $sub_cat_fetch_data['subcategory_name']; ?>">
  </div>
 
  <div class="form-group">
    <label for="exampleInputPassword1">Tags</label>
    <textarea name="subcategory_tags" class="form-control" rows="2" placeholder="Enter Tags Name !"><?php echo $sub_cat_fetch_data['subcategory_tags']; ?></textarea>
  </div>
  <button name="subcategory_update" type="submit" class="btn btn-warning">Add Sub-Category</button>
</form>
<!-------------------------------------------------------------------->
                        </div>
                    </div>  
<?php 
    }
    else
    {
?>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Add New Sub-Category !
                        </div>
                        <div class="panel-body">
<!-------------------------------------------------------------------->
<form class="form" method="post" action="sub_category.php">
  <div class="form-group">
    <label for="exampleInputEmail1">Select Category</label>
    <select class="form-control" name="subcategory_catid">
        <option value="">Select Category !</option>
<?php 
    $cat_qry = "SELECT * FROM tb_mvc_365_category  WHERE category_status=0"; 
    $cat_result = $DB->select($cat_qry);
    if($cat_result){
        while($catdata = $cat_result->fetch_array()){
?>
        <option value="<?php echo $catdata['category_id']; ?>"> <?php echo $catdata['category_name']; ?> </option>
<?php             
        }
    }  
?>

    </select>
  </div> 
  <div class="form-group">
    <label for="exampleInputEmail1">Sub Category</label>
    <input name="subcategory_name" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Category Name">
  </div>
 
  <div class="form-group">
    <label for="exampleInputPassword1">Tags</label>
    <textarea name="subcategory_tags" class="form-control" rows="2" placeholder="Enter Tags Name !"></textarea>
  </div>
  <button name="subcategory_save" type="submit" class="btn btn-primary">Add Sub-Category</button>
</form>
<!-------------------------------------------------------------------->
                        </div>
                    </div>  
<?php 
    }
?>



             






<!------------------------------------------------------------------------->
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