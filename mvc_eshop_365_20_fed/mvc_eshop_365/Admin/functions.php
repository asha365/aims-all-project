<!--------------------------------------------------------------------------------->


<!--------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------->
            <?php //data edit to form

                if(isset($_POST['product_edit'])) {
                	$edit_id = $_POST['edit_id'];
                    $old_image = $_POST['old_image'];
                    $cat_id = $_POST['cat_id'];
                    $subcat_id = $_POST['subcat_id'];
                    $product_name = $_POST['product_name'];
                    $product_company = $_POST['product_company'];
                    $product_description = $_POST['product_description'];
                    $product_price = $_POST['product_price'];
                    $product_offers = $_POST['product_offers'];

                    $product_image = $_FILES['product_image']['name'];
                    $product_tmp_name_image = $_FILES['product_image']['tmp_name'];
                    $location = '../images/products/';
                    if(empty($product_image)){

                    if(empty($cat_id) OR empty($subcat_id) OR empty($product_name) OR empty($product_company) OR empty($product_description) OR empty($product_price) OR empty($old_image) OR empty($product_offers) ){
                    	header('location:editproduct.php');
                        echo 'data not empty';
                    }else{
                    	$qry_update_product ="

                    	UPDATE tb_mvc_365_product 

                    	SET 
                    	cat_id = '$cat_id',
                    	subcat_id = '$subcat_id',
                    	product_name = '$product_name',
                    	product_company = '$product_company',
                    	product_price = '$product_price',
                    	product_description = '$product_description',
                    	product_offers = '$product_offers'

                    	WHERE product_id = '$edit_id'

                    	";
                    	 $update_product_result = $DB->update($qry_update_product);
                    	 if($update_product_result){
                            header('Location:editproduct.php');
                    	}
                    }

                    }else{

                        $random_digit=rand(0000000,9999999);
                        $new_file_name='aims'.$random_digit.'365'.$random_digit.$product_image;
                        move_uploaded_file($product_tmp_name_image, $location.$new_file_name);
                        unlink('../images/products/'.$old_image);
                        
                        $qry_update_product ="

                        UPDATE tb_mvc_365_product 

                        SET 
                        cat_id = '$cat_id',
                        subcat_id = '$subcat_id',
                        product_name = '$product_name',
                        product_company = '$product_company',
                        product_price = '$product_price',
                        product_description = '$product_description',
                        product_image = '$product_image',
                        product_offers = '$product_offers'

                        WHERE product_id = '$edit_id'

                        ";
                         $update_product_result = $DB->update($qry_update_product);
                         if($update_product_result){
                            header('Location:editproduct.php');
                        }
                    }
                }

            ?>
<!--------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------->

<?php //edit product 
	if(isset($_GET['editid'])){
		$editid = $_GET ['editid'];
		$qry_edit_product = "SELECT * FROM tb_mvc_365_product WHERE product_id = '$editid'";
		$edit_product_result = $DB->select($qry_edit_product);
		if($edit_product_result){
			$edit_product_data = $edit_product_result->fetch_assoc();
		}
	}
?>
<!--------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------->
<!--================================================================-->
<?php /*.. PAGE SAVE MODULE ..*/
    if(isset($_POST['page_save'])){
        $page_name = $_POST['page_name'];
        $page_position = $_POST['page_position'];
        $page_tags = $_POST['page_tags'];

        if(empty($page_name) OR empty($page_position)){
                $msg = '<small><span class="glyphicon glyphicon-remove" aria-hidden="true" style="color:red;"></span></small>';
                header('Location:pages.php?msg='.$msg);  
        }else{
            $page_save_qry = "INSERT INTO tb_mvc_365_pages(page_name,page_position,page_tags)VALUES('$page_name','$page_position','$page_tags')";

            $page_save_result = $DB->insert($page_save_qry);
            if ($page_save_result) {
                $msg = '<small><span class="glyphicon glyphicon-ok" aria-hidden="true" style="color:green;"></span></small>';
                   header('Location:pages.php?msg='.$msg); 
            }
        }
    }
?>
<!--================================================================-->
<!--------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------->
 <?php //delete images
    if(isset($_GET['deleteid'])){
        $deleteid = $_GET['deleteid'];
        $deleteimg = $_GET['delete_image'];

        $qry_delete_mobile = "DELETE FROM tb_mvc_365_product WHERE product_id='$deleteid'";
        $result=$DB->delete($qry_delete_mobile); 
        if($result){
            unlink('../images/products/'.$deleteimg);
            header('location:allproduct.php');
        }
    }
 ?>
<!--------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------->
            <?php //data insert to form

                if(isset($_POST['product_save'])) {
                    $cat_id = $_POST['cat_id'];
                    $subcat_id = $_POST['subcat_id'];
                    $product_name = $_POST['product_name'];
                    $product_company = $_POST['product_company'];
                    $product_description = $_POST['product_description'];
                    $product_price = $_POST['product_price'];
                    $product_offers = $_POST['product_offers'];

                    $product_image = $_FILES['product_image']['name'];
                    $product_tmp_name_image = $_FILES['product_image']['tmp_name'];
                    $location = '../images/products/';

                    if(empty($cat_id) OR empty($subcat_id) OR empty($product_name) OR empty($product_company) OR empty($product_price) OR empty($product_image) ){
                        echo $msg = '<span>data not save !</span>';
                    }else{
                        //ECHO $product_image;  echo '<br/>';

                        $random_digit=rand(0000000,9999999);
                        $new_file_name='aims'.$random_digit.'365'.$random_digit.$product_image;
                        move_uploaded_file($product_tmp_name_image, $location.$new_file_name);
                        
                        $qry_product_save = "INSERT INTO `tb_mvc_365_product` (`cat_id`, `subcat_id`, `product_name`, `product_company`, `product_price`, `product_description`, `product_offers`, `product_image`) VALUES ('$cat_id', '$subcat_id', '$product_name', '$product_company','$product_price', '$product_description', '$product_offers', '$new_file_name');";

                        $result_product_save = $DB->insert($qry_product_save);
                        if($result_product_save){
                            echo $msg = '<span> product save Successful ! </span>'; 
                            header('location:addproduct.php');
                        }
                    }
                    
                }

            ?>
<!--------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------->
<!--================================================================-->
<!--================================================================-->
<!--==========THEME OPTIONS MODULE =================================-->
<!--================================================================-->
<!--================================================================-->
<?php  
    if(isset($_GET['subcat_edid'])){
        $fetch_subcat = $_GET['subcat_edid']; 
        $sub_cat_fetch_qry = "SELECT * FROM tb_mvc_365_subcategory WHERE subcategory_id='$fetch_subcat'"; 
        $sub_cat_fetch_result = $DB->select($sub_cat_fetch_qry); 
        if($sub_cat_fetch_result){
            $sub_cat_fetch_data = $sub_cat_fetch_result->fetch_assoc();
            //var_dump($sub_cat_fetch_data); die(); 
        }
    }
?>
<!--================================================================-->
<!--================================================================-->
<!--================================================================-->
<!--================================================================-->
<!--================================================================-->


<!--================================================================-->
<!--================================================================-->
<!--==========THEME OPTIONS MODULE =================================-->
<!--================================================================-->
<!--================================================================-->
<?php /*THEME ACTIVATION MODULE..*/
    if(isset($_GET['th_id'])){
        $th_id = $_GET['th_id']; 
        $refresh_qry = "UPDATE `tb_mvc_365_theme` SET `theme_status`=0";
        $refresh_result = $DB->update($refresh_qry); 
        if($refresh_result){
            $theme_set_qry = "UPDATE `tb_mvc_365_theme` SET `theme_status`=1 WHERE theme_id='$th_id'";
            $theme_set_result = $DB->update($theme_set_qry); 
            if($theme_set_result){
                $msg = '<small><span class="glyphicon glyphicon-check" aria-hidden="true" style="color:green;"></span></small>';
                header('Location:themes.php?msg='.$msg); 
            }else{
                $msg = '<small><span class="glyphicon glyphicon-remove" aria-hidden="true" style="color:red;"></span></small>';
                header('Location:themes.php?msg='.$msg); 
            }       
        }
    }
?>
<!--================================================================-->
<!--================================================================-->
<!--================================================================-->
<!--================================================================-->
<!--================================================================-->
<?php /*CATEGORY STATUS ON*/
    if(isset($_GET['subcat_st_idon'])){
        $subcat_id = $_GET['subcat_st_idon']; 
        $subcat_status_update_qry = "UPDATE tb_mvc_365_subcategory SET subcategory_status=0 WHERE subcategory_id='$subcat_id'"; 
        $subcat_status_update_result = $DB->update($subcat_status_update_qry); 
        if($subcat_status_update_result){
            $msg = '<small><span class="glyphicon glyphicon-ok" aria-hidden="true" style="color:green;"></span></small>';
            header('Location:sub_category.php?msg='.$msg); 
        }
    }
?>
<?php /*CATEGORY STATUS OFF*/
    if(isset($_GET['subcat_st_idoff'])){
        $subcat_id = $_GET['subcat_st_idoff']; 
        $subcat_status_update_qry = "UPDATE tb_mvc_365_subcategory SET subcategory_status=1 WHERE subcategory_id='$subcat_id'"; 
        $subcat_status_update_result = $DB->update($subcat_status_update_qry); 
        if($subcat_status_update_result){
            $msg = '<small><span class="glyphicon glyphicon-ok" aria-hidden="true" style="color:green;"></span></small>';
            header('Location:sub_category.php?msg='.$msg); 
        }
    }
?>
<!--================================================================-->
<!--================================================================-->
<!--================================================================-->
<!--================================================================-->
<!----------------------------------------------------------------------------------------------------------------------->
<!--================================================================-->
<!--================================================================-->
<!--==========SITE SETTINGS=========================================-->
<!--================================================================-->
<!--================================================================-->
<?php /*UPDATE SITE DATA for admin panel module..*/
    if(isset($_POST['siteinfo_update']))
    {
        $siteinfo_title = $_POST['siteinfo_title']; 
        $siteinfo_name = $_POST['siteinfo_name']; 
        $siteinfo_contact = $_POST['siteinfo_contact']; 

        $siteinfo_subcontact = $_POST['siteinfo_subcontact']; 
        $siteinfo_slogan = $_POST['siteinfo_slogan']; 
        $siteinfo_address = $_POST['siteinfo_address']; 

        $siteinfo_map = $_POST['siteinfo_map']; 
        $siteinfo_webmail = $_POST['siteinfo_webmail']; 
        $siteinfo_keywords = $_POST['siteinfo_keywords']; 

        $siteinfo_discription = $_POST['siteinfo_discription']; 
        $siteinfo_copyright = $_POST['siteinfo_copyright']; 
        $siteinfo_tags = $_POST['siteinfo_tags']; 


        if(empty($siteinfo_title) OR empty($siteinfo_name)){
                $msg = '<small><span class="glyphicon glyphicon-remove" aria-hidden="true" style="color:red;"></span></small>';
                header('Location:site_settings.php?msg='.$msg); 
        }else{
            $siteinfo_update_qry = "
                UPDATE tb_mvc_365_siteinfo
                SET
                siteinfo_title = '$siteinfo_title',
                siteinfo_name = '$siteinfo_name',
                siteinfo_contact = '$siteinfo_contact',

                siteinfo_subcontact = '$siteinfo_subcontact',
                siteinfo_slogan = '$siteinfo_slogan',
                siteinfo_address = '$siteinfo_address',

                siteinfo_map = '$siteinfo_map',
                siteinfo_webmail = '$siteinfo_webmail',
                siteinfo_keywords = '$siteinfo_keywords',

                siteinfo_discription = '$siteinfo_discription',
                siteinfo_copyright = '$siteinfo_copyright',
                siteinfo_tags = '$siteinfo_tags'
                WHERE siteinfo_id = 1 
            ";

            $siteinfo_update_result = $DB->update($siteinfo_update_qry); 
            if($siteinfo_update_result){
                $msg = '<small> <span class="glyphicon glyphicon-check" aria-hidden="true" style="color:green;"></span></small>';
                header('Location:site_settings.php?msg='.$msg); 
            }
        }
    }
?>
<!--================================================================-->
<!--================================================================-->
<?php /*get site data for admin panel SITE SETTINGS module..*/
    $siteinfo_qry = "SELECT * FROM tb_mvc_365_siteinfo WHERE siteinfo_id=1";
    $siteinfo_result = $DB->select($siteinfo_qry); 
    if($siteinfo_result){
        $siteinfo_data = $siteinfo_result->fetch_assoc(); 
    }
?>
<!--================================================================-->
<!--================================================================-->
<!--================================================================-->
<!--================================================================-->
<!--================================================================-->

<!------------------------------------------------------------------------------------------------------------------>

<!--================================================================-->
<!--================================================================-->
<!--=================CATEGORY OPTIONS===============================-->
<!--================================================================-->
<!--================================================================-->
<?php /*CATEGORY DELETE OPTIONS MODULE..*/
    if(isset($_GET['cat_delid'])){
        $delid = $_GET['cat_delid'];  
        $category_del_qry = "DELETE FROM tb_mvc_365_category WHERE category_id='$delid'";
        $category_del_result = $DB->delete($category_del_qry);
        if($category_del_result){
                $msg = '<small><span class="glyphicon glyphicon-ok" aria-hidden="true" style="color:red;"></span></small>';
                header('Location:category.php?msg='.$msg);
        }     
    }
?>
<!--================================================================-->
<!--================================================================-->
<?php /*CATEGORY SAVE OPTIONS MODULE..*/
    if(isset($_POST['category_save'])){
        $category_name = $_POST['category_name'];
        $category_tags = $_POST['category_tags']; 

        if(empty($category_name)){
                $msg = '<small><span class="glyphicon glyphicon-remove" aria-hidden="true" style="color:red;"></span></small>';
                header('Location:category.php?msg='.$msg);  
        }else{
            $category_save_qry = "INSERT INTO tb_mvc_365_category (category_name,category_tags) VALUES ('$category_name','$category_tags')"; 
            $category_save_result = $DB->insert($category_save_qry);
            if ($category_save_result) {
                $msg = '<small><span class="glyphicon glyphicon-ok" aria-hidden="true" style="color:green;"></span></small>';
                   header('Location:category.php?msg='.$msg); 
            }
        }
    }
?>
<!--================================================================-->
<!--================================================================-->
<?php /*CATEGORY FETCH FOR EDIT.. MODULE*/
    if(isset($_GET['cat_edid'])){
        $cat_ed_id = $_GET['cat_edid'];
        $cat_edit_info_qry = "SELECT * FROM tb_mvc_365_category WHERE category_id='$cat_ed_id'";  
        $cat_edit_info_result = $DB->select($cat_edit_info_qry);
        if($cat_edit_info_result){
            $cat_edit_info_data = $cat_edit_info_result->fetch_assoc(); 
        } 
    }
?>
<!--================================================================-->
<!--================================================================-->
<?php /*CATEGORY UPDATE MODULE..*/
    if(isset($_POST['category_update'])){
        $category_id   = $_POST['category_id'];  
        $category_name = $_POST['category_name'];
        $category_tags = $_POST['category_tags']; 

        if(empty($category_id)){
                $msg = '<small><span class="glyphicon glyphicon-remove" aria-hidden="true" style="color:red;"></span></small>';
                header('Location:category.php?msg='.$msg);  
        }else{
            $category_update_qry = "UPDATE tb_mvc_365_category SET category_name= '$category_name', category_tags = '$category_tags' WHERE category_id='$category_id'"; 
            $category_update_result = $DB->update($category_update_qry);
            if ($category_update_result) {
                $msg = '<small><span class="glyphicon glyphicon-ok" aria-hidden="true" style="color:green;"></span></small>';
                   header('Location:category.php?msg='.$msg); 
            }
        }
    }
?>
<!--================================================================-->
<!--================================================================-->
<?php /*CATEGORY STATUS ON*/
    if(isset($_GET['cat_st_idon'])){
        $cat_id = $_GET['cat_st_idon']; 
        $cat_status_update_qry = "UPDATE tb_mvc_365_category SET category_status=0 WHERE category_id='$cat_id'"; 
        $cat_status_update_result = $DB->update($cat_status_update_qry); 
        if($cat_status_update_result){
            $msg = '<small><span class="glyphicon glyphicon-ok" aria-hidden="true" style="color:green;"></span></small>';
            header('Location:category.php?msg='.$msg); 
        }
    }
?>
<?php /*CATEGORY STATUS OFF*/
    if(isset($_GET['cat_st_idoff'])){
        $cat_id = $_GET['cat_st_idoff']; 
        $cat_status_update_qry = "UPDATE tb_mvc_365_category SET category_status=1 WHERE category_id='$cat_id'"; 
        $cat_status_update_result = $DB->update($cat_status_update_qry); 
        if($cat_status_update_result){
            $msg = '<small><span class="glyphicon glyphicon-ok" aria-hidden="true" style="color:green;"></span></small>';
            header('Location:category.php?msg='.$msg); 
        }
    }
?>
<!--================================================================-->
<!--================================================================-->
<!--================================================================-->
<!--================================================================-->
<!--================================================================-->
<!--================================================================-->
<!--================================================================-->
<?php /*SUB CATEGORY Update OPTIONS*/ 
    if(isset($_POST['subcategory_update'])){
        $subcategory_id = $_POST['subcategory_id'];
        $subcategory_catid = $_POST['subcategory_catid'];  
        $subcategory_name = $_POST['subcategory_name']; 
        $subcategory_tags = $_POST['subcategory_tags']; 

        if(empty($subcategory_catid) OR empty($subcategory_name)){
                $msg = '<small><span class="glyphicon glyphicon-remove" aria-hidden="true" style="color:red;"></span></small>';
                header('Location:sub_category.php?msg='.$msg);  
        }else{
            $sub_cat_save_qry = "UPDATE tb_mvc_365_subcategory 
                SET 
                subcategory_catid = '$subcategory_catid',
                subcategory_name = '$subcategory_name',
                subcategory_tags = '$subcategory_tags'
                WHERE subcategory_id='$subcategory_id'
            ";
            $sub_cat_save_result = $DB->update($sub_cat_save_qry);
            if($sub_cat_save_qry){
                $msg = '<small><span class="glyphicon glyphicon-ok" aria-hidden="true" style="color:green;"></span></small>';
                   header('Location:sub_category.php?msg='.$msg);                 
            }  
        }
    }
?>
<!--================================================================-->
<!--================================================================-->
<!--================================================================-->
<!--================================================================-->
<!--================================================================-->
<?php /*SUB CATEGORY SAVE OPTIONS*/ 
    if(isset($_POST['subcategory_save'])){
        $subcategory_catid = $_POST['subcategory_catid']; 
        $subcategory_name = $_POST['subcategory_name']; 
        $subcategory_tags = $_POST['subcategory_tags']; 

        if(empty($subcategory_catid) OR empty($subcategory_name)){
                $msg = '<small><span class="glyphicon glyphicon-remove" aria-hidden="true" style="color:red;"></span></small>';
                header('Location:sub_category.php?msg='.$msg);  
        }else{
            $sub_cat_save_qry = "INSERT INTO tb_mvc_365_subcategory (subcategory_catid,subcategory_name,subcategory_tags)VALUES('$subcategory_catid','$subcategory_name','$subcategory_tags')";
            $sub_cat_save_result = $DB->insert($sub_cat_save_qry);
            if($sub_cat_save_qry){
                $msg = '<small><span class="glyphicon glyphicon-ok" aria-hidden="true" style="color:green;"></span></small>';
                   header('Location:sub_category.php?msg='.$msg);                 
            }  
        }
    }
?>
<!--================================================================-->
<!--================================================================-->
<!--================================================================-->
<?php /*REMOVE SUB-CATEGORY ITEMS MODULE..*/
    if(isset($_GET['subcat_delid'])){
        $subcat_delid = $_GET['subcat_delid'];  
        $subcategory_del_qry = "DELETE FROM tb_mvc_365_subcategory WHERE subcategory_id='$subcat_delid'";
        $subcategory_del_result = $DB->delete($subcategory_del_qry);
        if($subcategory_del_result){
            $msg = '<small><span class="glyphicon glyphicon-ok" aria-hidden="true" style="color:red;"></span></small>';
            header('Location:sub_category.php?msg='.$msg);
        }     
    }
?>

<!--================================================================-->
<!--================================================================-->
<!--================================================================-->
<!--================================================================-->
<!--================================================================-->
<!--================================================================-->
<!--------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------->
<?php /*Approved Product*/
    if(isset($_GET['pr_unblock'])){
        $pr_unblock = $_GET['pr_unblock']; 
        $product_approve_qry = "UPDATE tb_mvc_365_product SET product_status=0 WHERE product_id='$pr_unblock'"; 
        $pending_approve_result = $DB->update($product_approve_qry); 
        if($pending_approve_result){
            $msg = '<small><span class="glyphicon glyphicon-ok" aria-hidden="true" style="color:green;"></span></small>';
            header('Location:allproduct.php?msg='.$msg); 
        }
    }
?>
<!--------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------->
<?php /*Approved Product*/
    if(isset($_GET['pr_block'])){
        $pr_block = $_GET['pr_block']; 
        $product_approve_qry = "UPDATE tb_mvc_365_product SET product_status=1 WHERE product_id='$pr_block'"; 
        $pending_approve_result = $DB->update($product_approve_qry); 
        if($pending_approve_result){
            $msg = '<small><span class="glyphicon glyphicon-ok" aria-hidden="true" style="color:green;"></span></small>';
            header('Location:allproduct.php?msg='.$msg); 
        }
    }
?>
<!--------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------------------>

<!--================================================================-->
<!--================================================================-->
<!--================================================================-->
<!--------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------->
<?php /*Approved Product*/
    if(isset($_GET['pending_id'])){
        $pending_id = $_GET['pending_id']; 
        $product_approve_qry = "UPDATE tb_mvc_365_product SET permission=1 WHERE product_id='$pending_id'"; 
        $pending_approve_result = $DB->update($product_approve_qry); 
        if($pending_approve_result){
            $msg = '<small><span class="glyphicon glyphicon-ok" aria-hidden="true" style="color:green;"></span></small>';
            header('Location:pendingproduct.php?msg='.$msg); 
        }
    }
?>
<!--------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------->
<!--================================================================-->
<!--================================================================-->
<!--================================================================-->
