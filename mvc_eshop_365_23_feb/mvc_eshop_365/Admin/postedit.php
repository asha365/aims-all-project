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
                        <h1 class="page-header" style="font-weight: bold; ">Post Update Options
                            <a class="pull-right btn btn-sm btn-primary" href="posts.php"><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span></a>
                            
                            <a class="pull-right btn btn-sm btn-info" href="postlist.php" style="margin-right:10px; "><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> Post List </a>
                            
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

<form action="postedit.php" method="post">                 
    <input type="hidden" value="<?php echo $get_post_edit_data['post_id']; ?>" name="post_id" >
                    <div class="row">
                        <div class="col-lg-12">
                           <h2> 
                            <select name="post_page_id" class="form-control" style="background:lightblue; font-weight: bold; ">
                                <option value="">Select Page Menu !</option>
<?php 
    $get_page_qry = "SELECT * FROM tb_mvc_365_pages WHERE page_status=1"; 
    $get_page_result = $DB->select($get_page_qry); 
    if($get_page_result){
        while($get_page_data= $get_page_result->fetch_array()){
?>
    <option value="<?php echo $get_page_data['page_id']; ?>" <?php if($get_page_data['page_id']== $get_post_edit_data['post_page_id']){ echo 'selected'; } ?>><?php echo $get_page_data['page_name']; ?></option>


<?php 
        }
    }
?>                                
                            </select>
                            </h2>
                            <div class="box">
                                <textarea name="post_title" class="form-control wmd-input" rows="1" id="wmd-input" placeholder="Enter Post Title !"><?php if(isset($get_post_edit_data)){ echo $get_post_edit_data['post_title']; } ?></textarea>
                                <br/>
                                <header>
                                    <h5>Markdown Editor</h5>
                                    <ul class="nav nav-tabs pull-right">
                                        <li class="active"><a href="#markdown" data-toggle="tab">Markdown</a></li>
                                        <li><a href="#preview" data-toggle="tab">Preview</a></li>
                                    </ul>
                                </header>
                                <div id="div-3" class="body tab-content">
                                    <div class="tab-pane fade active in" id="markdown">
                                        <div class="wmd-panel">
                                            <div id="wmd-button-bar" class="btn-toolbar"></div>

                                                <textarea name="post_content" class="form-control wmd-input" rows="8" id="wmd-input" placeholder="Enter Post Content !"><?php if(isset($get_post_edit_data)){ echo $get_post_edit_data['post_content']; } ?></textarea>
                                                <br/>

                                                <textarea class="form-control wmd-input" rows="2" name="post_tags" id="wmd-input" placeholder="Enter Post Tags !"><?php if(isset($get_post_edit_data)){ echo $get_post_edit_data['post_tags']; } ?></textarea>

                                        <div class="form-actions no-margin-bottom" id="Div1"><Br/>
                                            <input type="submit" name="post_update" value="Update Post !" class="btn btn-primary" />
                                        </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="preview">
                                        <div id="wmd-preview" class="wmd-panel wmd-preview"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

</form><!---end of post form..--->
<!--------------------------------------------------------------------------->
<!--------------------------------------------------------------------------->
<!--------------------------------------------------------------------------->
<!--------------------------------------------------------------------------->
<!--------------------------------------------------------------------------->
<!--------------------------------------------------------------------------->
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