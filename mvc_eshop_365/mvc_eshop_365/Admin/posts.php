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


                        <h2> WYSIWYG / Editors</h2>



                    </div>
                </div>

                <hr />

                 
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="box">
                                <header>
                                    <div class="icons"><i class="icon-th-large"></i></div>
                                    <h5>Basic Editor</h5>
                                    <ul class="nav pull-right">
                                        <li>
                                            <div class="btn-group">
                                                <a class="accordion-toggle btn btn-xs minimize-box" data-toggle="collapse"
                                                    href="#div-1">
                                                    <i class="icon-minus"></i>
                                                </a>
                                                 <button class="btn btn-danger btn-xs close-box">
                                                    <i
                                                        class="icon-remove"></i>
                                                </button>
                                            </div>
                                        </li>
                                    </ul>
                                </header>
                                <br/>
                                <div id="div-1" class="body collapse in">
                                        <select class="form-control" name="page_position">
                                            <option value="">Select Page Position !</option>
<?php 
    $get_page_qry = "SELECT * FROM tb_mvc_365_pages";
    $get_page_result = $DB->select($get_page_qry); 
    if($get_page_result){
        while($get_page_data = $get_page_result->fetch_array()){
?>
    <option value="<?php echo $get_page_data['page_id']; ?>"><?php echo $get_page_data['page_name']; ?></option>
<?php             
        }
    }
?>                                            
                                        </select>
                                </div>
                                <div id="div-1" class="body collapse in">
                                        <textarea id="wysihtml5" class="form-control" rows="14"></textarea>
                                        <div class="form-actions">
                                            <br />
                                            <input type="submit" value="Submit Post" class="btn btn-primary" />
                                        </div>
                                </div>
                            </div>
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