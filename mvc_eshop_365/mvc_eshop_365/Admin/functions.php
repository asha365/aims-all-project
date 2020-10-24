<?php 
/*
|AIMS-365 -----------------------------------------------------------------------------------------AIMS-365|
|AIMS-365 -----------------------------------------------------------------------------------------AIMS-365|
|AIMS-365 -----------------------------------------------------------------------------------------AIMS-365|
|AIMS-365 -----------------------------------------------------------------------------------------AIMS-365|
|AIMS-365 -----------------------------------------------------------------------------------------AIMS-365|
|AIMS-365 -----------------------------------------------------------------------------------------AIMS-365|
|AIMS-365 -----------------------------------------------------------------------------------------AIMS-365|
|AIMS-365 -----------------------------------------------------------------------------------------AIMS-365|
|AIMS-365 -----------------------------------------------------------------------------------------AIMS-365|
|AIMS-365 -----------------------------------------------------------------------------------------AIMS-365|
=================================== SITE THEME OPTIONS =====================================================
*/
/*------------------------------------------| THEME UPDATE |----------------------------------------------*/
if(isset($_GET['th_id'])){ 
    $th_id = $_GET['th_id'];  
    
    $refresh_qry = "UPDATE `tb_mvc_365_theme` SET `theme_status`=0"; $refresh_result = $DB->update($refresh_qry);    
    if($refresh_result){ 
        $theme_set_qry = "UPDATE `tb_mvc_365_theme` SET `theme_status`=1 WHERE theme_id='$th_id'"; 
        $theme_set_result = $DB->update($theme_set_qry);
        if($theme_set_result){  
            echo '<script>window.location="themes.php?error"</script>';   
        }else{ 
            echo '<script>window.location="themes.php?success"</script>';  
        } 
    } 
}//END OF ISSET IF..
/*
|AIMS-365 -----------------------------------------------------------------------------------------AIMS-365|
|AIMS-365 -----------------------------------------------------------------------------------------AIMS-365|
|AIMS-365 -----------------------------------------------------------------------------------------AIMS-365|
|AIMS-365 -----------------------------------------------------------------------------------------AIMS-365|
|AIMS-365 -----------------------------------------------------------------------------------------AIMS-365|
|AIMS-365 -----------------------------------------------------------------------------------------AIMS-365|
|AIMS-365 -----------------------------------------------------------------------------------------AIMS-365|
|AIMS-365 -----------------------------------------------------------------------------------------AIMS-365|
|AIMS-365 -----------------------------------------------------------------------------------------AIMS-365|
|AIMS-365 -----------------------------------------------------------------------------------------AIMS-365|
====================================== WEBSITE OR COMPANY SETTINGS =========================================
*/
/*------------------------------------------| SITE INFO UPDATE  | ----------------------------------------*/
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
            echo '<script>window.location="site_settings.php?error"</script>'; 
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
                echo '<script>window.location="site_settings.php?success"</script>'; 
            }
        }
    }
/*---------------------------get site data for admin panel SITE SETTINGS module--------------------------------*/
    $siteinfo_qry = "SELECT * FROM tb_mvc_365_siteinfo WHERE siteinfo_id=1";
    $siteinfo_result = $DB->select($siteinfo_qry); 
    if($siteinfo_result){
        $siteinfo_data = $siteinfo_result->fetch_assoc(); 
    }
/*
|AIMS-365 -----------------------------------------------------------------------------------------AIMS-365|
|AIMS-365 -----------------------------------------------------------------------------------------AIMS-365|
|AIMS-365 -----------------------------------------------------------------------------------------AIMS-365|
|AIMS-365 -----------------------------------------------------------------------------------------AIMS-365|
|AIMS-365 -----------------------------------------------------------------------------------------AIMS-365|
|AIMS-365 -----------------------------------------------------------------------------------------AIMS-365|
|AIMS-365 -----------------------------------------------------------------------------------------AIMS-365|
|AIMS-365 -----------------------------------------------------------------------------------------AIMS-365|
|AIMS-365 -----------------------------------------------------------------------------------------AIMS-365|
|AIMS-365 -----------------------------------------------------------------------------------------AIMS-365|
=================================| START# CATEGORY OPTIONS MODULE |========================================= 
*/
/*---------------------------------------CATEGORY DELETE -------------------------------------------------*/
    if(isset($_GET['cat_delid'])){
        $delid = $_GET['cat_delid'];  
        $category_del_qry = "DELETE FROM tb_mvc_365_category WHERE category_id='$delid'";
        $category_del_result = $DB->delete($category_del_qry);
        if($category_del_result){
            echo '<script>window.location="category.php?success"</script>'; 
        }     
    }
/*---------------------------------CATEGORY FETCH FOR EDIT.. MODULE----------------------------------------*/
    if(isset($_GET['cat_edid'])){
        $cat_ed_id = $_GET['cat_edid'];
        $cat_edit_info_qry = "SELECT * FROM tb_mvc_365_category WHERE category_id='$cat_ed_id'";  
        $cat_edit_info_result = $DB->select($cat_edit_info_qry);
        if($cat_edit_info_result){
            $cat_edit_info_data = $cat_edit_info_result->fetch_assoc(); 
        } 
    }
 /*---------------------------------------CATEGORY UPDATE MODULE-------------------------------------------*/
    if(isset($_POST['category_update'])){
        $category_id   = $_POST['category_id'];  
        $category_name = $_POST['category_name'];
        $category_tags = $_POST['category_tags']; 

        if(empty($category_id)){
             echo '<script>window.location="category.php?error"</script>';
        }else{
            $category_update_qry = "UPDATE tb_mvc_365_category SET category_name= '$category_name', category_tags = '$category_tags' WHERE category_id='$category_id'"; 
            $category_update_result = $DB->update($category_update_qry);
            if ($category_update_result) {
                echo '<script>window.location="category.php?success"</script>'; 
            }
        }
    }
/*---------------------------------------CATEGORY save MODULE-------------------------------------------*/
/*CATEGORY SAVE OPTIONS MODULE..*/
    if(isset($_POST['category_save'])){
        $category_name = $_POST['category_name'];
        $category_tags = $_POST['category_tags']; 

        if(empty($category_name)){
                echo '<script>window.location="category.php?error"</script>'; 
        }else{
            $category_save_qry = "INSERT INTO tb_mvc_365_category (category_name,category_tags) VALUES ('$category_name','$category_tags')"; 
            $category_save_result = $DB->insert($category_save_qry);
            if ($category_save_result) {
                echo '<script>window.location="category.php?success"</script>'; 
            }
        }
    }

/*---------------------------------------CATEGORY STATUS ON/OFF MODULE-----------------------------------*/

/*CATEGORY STATUS ON*/
    if(isset($_GET['cat_st_idon'])){
        $cat_id = $_GET['cat_st_idon']; 
        $cat_status_update_qry = "UPDATE tb_mvc_365_category SET category_status=0 WHERE category_id='$cat_id'"; 
        $cat_status_update_result = $DB->update($cat_status_update_qry); 
        if($cat_status_update_result){
            echo '<script>window.location="category.php?success"</script>'; 
        }
    }

    /*CATEGORY STATUS OFF*/
    if(isset($_GET['cat_st_idoff'])){
        $cat_id = $_GET['cat_st_idoff']; 
        $cat_status_update_qry = "UPDATE tb_mvc_365_category SET category_status=1 WHERE category_id='$cat_id'"; 
        $cat_status_update_result = $DB->update($cat_status_update_qry); 
        if($cat_status_update_result){
            echo '<script>window.location="category.php?success"</script>'; 
        }
    }
/*
=================================| END# CATEGORY OPTIONS MODULE |===========================================
|AIMS-365 -----------------------------------------------------------------------------------------AIMS-365|
|AIMS-365 -----------------------------------------------------------------------------------------AIMS-365|
|AIMS-365 -----------------------------------------------------------------------------------------AIMS-365|
|AIMS-365 -----------------------------------------------------------------------------------------AIMS-365|
|AIMS-365 -----------------------------------------------------------------------------------------AIMS-365|
|AIMS-365 -----------------------------------------------------------------------------------------AIMS-365|
|AIMS-365 -----------------------------------------------------------------------------------------AIMS-365|
|AIMS-365 -----------------------------------------------------------------------------------------AIMS-365|
|AIMS-365 -----------------------------------------------------------------------------------------AIMS-365|
|AIMS-365 -----------------------------------------------------------------------------------------AIMS-365|
|AIMS-365 -----------------------------------------------------------------------------------------AIMS-365|
|AIMS-365 -----------------------------------------------------------------------------------------AIMS-365|
=================================| START# SUBCATEGORY OPTIONS MODULE |======================================
*/
/*----------------------------------SUB CATEGORY Update OPTIONS-------------------------------------------*/ 
    if(isset($_POST['subcategory_update'])){
        $subcategory_id = $_POST['subcategory_id'];
        $subcategory_catid = $_POST['subcategory_catid'];  
        $subcategory_name = $_POST['subcategory_name']; 
        $subcategory_tags = $_POST['subcategory_tags']; 

        if(empty($subcategory_catid) OR empty($subcategory_name)){
                echo '<script>window.location="sub_category.php?error"</script>'; 
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
                echo '<script>window.location="sub_category.php?success"</script>'; 
            }  
        }
    }
/*------------------------------------------SUB CATEGORY UPDATE ID-------------------------------------------------*/
    if(isset($_GET['subcat_edid'])){
        $fetch_subcat = $_GET['subcat_edid']; 
        $sub_cat_fetch_qry = "SELECT * FROM tb_mvc_365_subcategory WHERE subcategory_id='$fetch_subcat'"; 
        $sub_cat_fetch_result = $DB->select($sub_cat_fetch_qry); 
        if($sub_cat_fetch_result){
            $sub_cat_fetch_data = $sub_cat_fetch_result->fetch_assoc();
        }
    }
/*----------------------------------------------------------REMOVE SUB-CATEGORY ITEMS MODULE..-------------------*/
    if(isset($_GET['subcat_delid'])){
        $subcat_delid = $_GET['subcat_delid'];  
        $subcategory_del_qry = "DELETE FROM tb_mvc_365_subcategory WHERE subcategory_id='$subcat_delid'";
        $subcategory_del_result = $DB->delete($subcategory_del_qry);
        if($subcategory_del_result){
            echo '<script>window.location="sub_category.php?success"</script>'; 
        }     
    }
/*----------------------------------------------------SUB CATEGORY STATUS ON--------------------------------------*/
    if(isset($_GET['subcat_st_idon'])){
        $subcat_id = $_GET['subcat_st_idon']; 
        $subcat_status_update_qry = "UPDATE tb_mvc_365_subcategory SET subcategory_status=0 WHERE subcategory_id='$subcat_id'"; 
        $subcat_status_update_result = $DB->update($subcat_status_update_qry); 
        if($subcat_status_update_result){
            echo '<script>window.location="sub_category.php?success"</script>'; 
        }
    }
/*-------------------------------------------------------CATEGORY STATUS OFF-----------------------------------------*/
    if(isset($_GET['subcat_st_idoff'])){
        $subcat_id = $_GET['subcat_st_idoff']; 
        $subcat_status_update_qry = "UPDATE tb_mvc_365_subcategory SET subcategory_status=1 WHERE subcategory_id='$subcat_id'"; 
        $subcat_status_update_result = $DB->update($subcat_status_update_qry); 
        if($subcat_status_update_result){
            echo '<script>window.location="sub_category.php?success"</script>';  
        }
    }
/*---------------------------------------SUB CATEGORY SAVE OPTIONS------------------------------------------------*/ 
    if(isset($_POST['subcategory_save'])){
        $subcategory_catid = $_POST['subcategory_catid']; 
        $subcategory_name = $_POST['subcategory_name']; 
        $subcategory_tags = $_POST['subcategory_tags']; 

        if(empty($subcategory_catid) OR empty($subcategory_name)){
                echo '<script>window.location="sub_category.php?error"</script>'; 
        }else{
            $sub_cat_save_qry = "INSERT INTO tb_mvc_365_subcategory (subcategory_catid,subcategory_name,subcategory_tags)VALUES('$subcategory_catid','$subcategory_name','$subcategory_tags')";
            $sub_cat_save_result = $DB->insert($sub_cat_save_qry);
            if($sub_cat_save_qry){
                echo '<script>window.location="sub_category.php?success"</script>'; 
            }  
        }
    }
/*
=================================| END# SUB CATEGORY OPTIONS MODULE |=======================================
|AIMS-365 -----------------------------------------------------------------------------------------AIMS-365|
|AIMS-365 -----------------------------------------------------------------------------------------AIMS-365|
|AIMS-365 -----------------------------------------------------------------------------------------AIMS-365|
|AIMS-365 -----------------------------------------------------------------------------------------AIMS-365|
|AIMS-365 -----------------------------------------------------------------------------------------AIMS-365|
|AIMS-365 -----------------------------------------------------------------------------------------AIMS-365|
|AIMS-365 -----------------------------------------------------------------------------------------AIMS-365|
|AIMS-365 -----------------------------------------------------------------------------------------AIMS-365|
|AIMS-365 -----------------------------------------------------------------------------------------AIMS-365|
|AIMS-365 -----------------------------------------------------------------------------------------AIMS-365|
==================================| START# PRODUCT OPTIONS MODULE |========================================
*/
/*----------------------------------|PRODUCT INSERT OPTION MODEL|--------------------------------------*/

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
                             echo '<script>window.location="addproduct.php?error"</script>'; 
                    }else{
                        //ECHO $product_image;  echo '<br/>';

                        $random_digit=rand(0000000,9999999);
                        $new_file_name='aims'.$random_digit.'365'.$random_digit.$product_image;
                        move_uploaded_file($product_tmp_name_image, $location.$new_file_name);
                        
                        $qry_product_save = "INSERT INTO `tb_mvc_365_product` (`cat_id`, `subcat_id`, `product_name`, `product_company`, `product_price`, `product_description`, `product_offers`, `product_image`) VALUES ('$cat_id', '$subcat_id', '$product_name', '$product_company','$product_price', '$product_description', '$product_offers', '$new_file_name');";

                        $result_product_save = $DB->insert($qry_product_save);
                        if($result_product_save){
                           echo '<script>window.location="addproduct.php?success"</script>';
                        }
                    }
                    
                }
/*
|AIMS-365 -----------------------------------------------------------------------------------------AIMS-365|
|AIMS-365 -----------------------------------------------------------------------------------------AIMS-365|
|AIMS-365 -----------------------------------------------------------------------------------------AIMS-365|
|AIMS-365 -----------------------------------------------------------------------------------------AIMS-365|
|AIMS-365 -----------------------------------------------------------------------------------------AIMS-365|
|AIMS-365 -----------------------------------------------------------------------------------------AIMS-365|
|AIMS-365 -----------------------------------------------------------------------------------------AIMS-365|
|AIMS-365 -----------------------------------------------------------------------------------------AIMS-365|
|AIMS-365 -----------------------------------------------------------------------------------------AIMS-365|
|AIMS-365 -----------------------------------------------------------------------------------------AIMS-365|
=================================| START# all PRODUCT OPTIONS MODULE |=====================================
*/
/*----------------------------------|PRODUCT EDIT OPTIONS MODULE|-----------------------------------------*/

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

                        if(empty($cat_id) OR empty($subcat_id) OR empty($product_name) OR empty($product_company) OR empty($product_description) OR empty($product_price)  OR empty($product_offers) ){

                                echo '<script>window.location="editproduct.php?error&producteditid='.$edit_id.'"; </script>';

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
                                echo '<script>window.location="allproduct.php?success"</script>';
                            }
                        }

                    }else{

                        $random_digit=rand(0000000,9999999);
                        $product_image='aims'.$random_digit.'365'.$random_digit.$product_image;
                        move_uploaded_file($product_tmp_name_image, $location.$product_image);
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

                        WHERE 
                            product_id = '$edit_id'  ";

                         $update_product_result = $DB->update($qry_update_product);
                         if($update_product_result){
                           echo '<script>window.location="allproduct.php?success"</script>';
                        }
                    }
                }
/*----------------------------------------PRODUCT EDIT ID---------------------------------------------------*/
 if(isset($_GET['producteditid'])){
        $editid = $_GET ['producteditid'];
        $qry_edit_product = "SELECT * FROM tb_mvc_365_product WHERE product_id = '$editid'";
        $edit_product_result = $DB->select($qry_edit_product);
        if($edit_product_result){
            $edit_product_data = $edit_product_result->fetch_assoc();
        }
    }

/*-------------------------------------|PRODUCT DELETE OPTION MODULE|--------------------------------------*/
    if(isset($_GET['deleteid'])){
        $deleteid = $_GET['deleteid'];
        $deleteimg = $_GET['delete_image'];

        $qry_delete_mobile = "DELETE FROM tb_mvc_365_product WHERE product_id='$deleteid'";
        $result=$DB->delete($qry_delete_mobile); 
        if($result){
            unlink('../images/products/'.$deleteimg);
            echo '<script>window.location="allproduct.php?success"</script>';
        }
    }

/*
|AIMS-365 -----------------------------------------------------------------------------------------AIMS-365|
|AIMS-365 -----------------------------------------------------------------------------------------AIMS-365|
|AIMS-365 -----------------------------------------------------------------------------------------AIMS-365|
|AIMS-365 -----------------------------------------------------------------------------------------AIMS-365|
|AIMS-365 -----------------------------------------------------------------------------------------AIMS-365|
|AIMS-365 -----------------------------------------------------------------------------------------AIMS-365|
|AIMS-365 -----------------------------------------------------------------------------------------AIMS-365|
|AIMS-365 -----------------------------------------------------------------------------------------AIMS-365|
|AIMS-365 -----------------------------------------------------------------------------------------AIMS-365|
|AIMS-365 -----------------------------------------------------------------------------------------AIMS-365|

=================================| START# PENDING PRODUCT OPTIONS MODULE |==================================
*/
/*-----------------------------------Approved-Product--------------------------------------------------------*/
    if(isset($_GET['pending_id'])){
        $pending_id = $_GET['pending_id']; 
        $product_approve_qry = "UPDATE tb_mvc_365_product SET permission=1 WHERE product_id='$pending_id'"; 
        $pending_approve_result = $DB->update($product_approve_qry); 
        if($pending_approve_result){
            echo '<script>window.location="pendingproduct.php?success"</script>'; 
            //header('Location:pendingproduct.php?msg='.$msg); 
        }
    }

/*
|AIMS-365 -----------------------------------------------------------------------------------------AIMS-365|
|AIMS-365 -----------------------------------------------------------------------------------------AIMS-365|
|AIMS-365 -----------------------------------------------------------------------------------------AIMS-365|
|AIMS-365 -----------------------------------------------------------------------------------------AIMS-365|
|AIMS-365 -----------------------------------------------------------------------------------------AIMS-365|
|AIMS-365 -----------------------------------------------------------------------------------------AIMS-365|
|AIMS-365 -----------------------------------------------------------------------------------------AIMS-365|
|AIMS-365 -----------------------------------------------------------------------------------------AIMS-365|
|AIMS-365 -----------------------------------------------------------------------------------------AIMS-365|
|AIMS-365 -----------------------------------------------------------------------------------------AIMS-365|

=================================| START# BLOCK PRODUCT OPTIONS MODULE |==================================
*/

/*------------------------------- PR_ BLOCK Approved Product-------------------------------------------------*/
    if(isset($_GET['pr_block'])){
        $pr_block = $_GET['pr_block']; 
        $product_approve_qry = "UPDATE tb_mvc_365_product SET product_status=1 WHERE product_id='$pr_block'"; 
        $pending_approve_result = $DB->update($product_approve_qry); 
        if($pending_approve_result){
            echo '<script>window.location="allproduct.php?success"</script>'; 
        }
    }
    /*--------------------------------------PR_UNBLOCK Approved Product-------------------------------------*/
    if(isset($_GET['pr_unblock'])){
        $pr_unblock = $_GET['pr_unblock']; 
        $product_approve_qry = "UPDATE tb_mvc_365_product SET product_status=0 WHERE product_id='$pr_unblock'"; 
        $pending_approve_result = $DB->update($product_approve_qry); 
        if($pending_approve_result){
            echo '<script>window.location="allproduct.php?success"</script>'; 
        }
    }
/*
|AIMS-365 -----------------------------------------------------------------------------------------AIMS-365|
|AIMS-365 -----------------------------------------------------------------------------------------AIMS-365|
|AIMS-365 -----------------------------------------------------------------------------------------AIMS-365|
|AIMS-365 -----------------------------------------------------------------------------------------AIMS-365|
|AIMS-365 -----------------------------------------------------------------------------------------AIMS-365|
|AIMS-365 -----------------------------------------------------------------------------------------AIMS-365|
|AIMS-365 -----------------------------------------------------------------------------------------AIMS-365|
|AIMS-365 -----------------------------------------------------------------------------------------AIMS-365|
|AIMS-365 -----------------------------------------------------------------------------------------AIMS-365|
|AIMS-365 -----------------------------------------------------------------------------------------AIMS-365|

=================================| START# PAGES  OPTIONS MODULE |==========================================
*/

/*------------------------------------------PAGES EDIT OPTIONS MODULE---------------------------------------*/ 

    if(isset($_POST['pages_update'])){
        $pages_update_id = $_POST['pages_update_id'];
        //var_dump($pages_update_id); die(); 

        $page_name = $_POST['page_name'];
        $page_position = $_POST['page_position'];
        $page_tags = $_POST ['page_tags'];
        if(empty($pages_update_id) OR empty($page_name) OR empty($page_position)){
            echo '<script>window.location="pages.php?error"</script>';
        }else{
            $qry_edit_site_page = "UPDATE `tb_mvc_365_pages` 
                SET page_name='$page_name', 
                `page_position` = '$page_position', 
                `page_tags` = '$page_tags' 
                WHERE `page_id` = '$pages_update_id'";

               $result_edit_page = $DB->update($qry_edit_site_page); 
                if($result_edit_page){
                   //var_dump($result_edit_page); die(); 
                    echo '<script>window.location="pages.php?success"</script>';
                }
        }/*end of edit */

    }
/*---------------------------------------------PAGES EDIT ID-----------------------------------------------*/
    if(isset($_GET['pageseditid'])){
        $page_post_edit = $_GET ['pageseditid'];
        $qry_edit_page = "SELECT * FROM tb_mvc_365_pages WHERE page_id ='$page_post_edit'";
        $edit_page_result = $DB->select($qry_edit_page);
        if($edit_page_result){
            $page_d_edit = $edit_page_result->fetch_assoc();
        }
    }
/*---------------------------------------------pages delete OPTION ---------------------------------------*/
    if(isset($_GET['pages_deleteid'])){
        $pages_delete = $_GET['pages_deleteid'];
        $qry_pages_delete = "DELETE FROM  tb_mvc_365_pages WHERE page_id = '$pages_delete'";
        $result_delete_page = $DB->delete($qry_pages_delete);
        if($result_delete_page){
            echo '<script>window.location="pages.php?success"</script>';
        }
    }
/*---------------------------------------pages site STATUS ON---------------------------------------------*/
    if(isset($_GET['pages_site_on'])){
        $page_site_id = $_GET['pages_site_on']; 
        $pages_site_on_qry = "UPDATE tb_mvc_365_pages SET page_status=1 WHERE page_id='$page_site_id'"; 
        $pages_site_result_on = $DB->update($pages_site_on_qry); 
        if($pages_site_result_on){
            echo '<script>window.location="pages.php?success"</script>';
        }
    }
/*------------------------------------------page site STATUS OFF------------------------------------------*/
    if(isset($_GET['page_off_site'])){
        $page_off_id = $_GET['page_off_site']; 
        $qry_page_site_off = "UPDATE tb_mvc_365_pages SET page_status=0 WHERE page_id='$page_off_id'"; 
        $result_page_off_site = $DB->update($qry_page_site_off); 
        if($result_page_off_site){
            echo '<script>window.location="pages.php?success"</script>';
        }
    }

/*..------------------------------------------------ PAGE SAVE MODULE-------------------------------------*/
    if(isset($_POST['page_save'])){
        $page_name = $_POST['page_name'];
        $page_position = $_POST['page_position'];
        $page_tags = $_POST['page_tags'];

        if(empty($page_name) OR empty($page_position)){
                echo '<script>window.location="pages.php?error"</script>'; ;  
        }else{
            $page_save_qry = "INSERT INTO tb_mvc_365_pages(page_name,page_position,page_tags)VALUES('$page_name','$page_position','$page_tags')";

            $page_save_result = $DB->insert($page_save_qry);
            if ($page_save_result) {
                echo '<script>window.location="pages.php?success"</script>'; 
            }
        }
    }
/*
|AIMS-365 -----------------------------------------------------------------------------------------AIMS-365|
|AIMS-365 -----------------------------------------------------------------------------------------AIMS-365|
|AIMS-365 -----------------------------------------------------------------------------------------AIMS-365|
|AIMS-365 -----------------------------------------------------------------------------------------AIMS-365|
|AIMS-365 -----------------------------------------------------------------------------------------AIMS-365|
|AIMS-365 -----------------------------------------------------------------------------------------AIMS-365|
|AIMS-365 -----------------------------------------------------------------------------------------AIMS-365|
|AIMS-365 -----------------------------------------------------------------------------------------AIMS-365|
|AIMS-365 -----------------------------------------------------------------------------------------AIMS-365|
|AIMS-365 -----------------------------------------------------------------------------------------AIMS-365|
*/ 

?> 