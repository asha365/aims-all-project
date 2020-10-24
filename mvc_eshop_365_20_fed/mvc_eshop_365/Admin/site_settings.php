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



      <!--PAGE CONTENT -->
        <div id="content">
            <div class="inner">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header" style="font-weight: bold; ">Site Settings &mdash; Info
                            <?php  if(isset($_GET['msg'])){ echo $_GET['msg']; } ?>
                        </h1>
                    </div>
                </div>


<div class="row">
<div class="col-lg-12">
    <div class="box dark">
        <div id="div-1" class="accordion-body collapse in body">
            <form class="form-horizontal" action="site_settings.php" method="post">
                <div class="form-group">
                    <label for="text1" class="control-label col-lg-4">Company Title</label>

                    <div class="col-lg-8">
                        <input name="siteinfo_title" type="text" id="text1" placeholder="Company Title !" class="form-control" value="<?php if(isset($siteinfo_data)){ echo $siteinfo_data['siteinfo_title']; } ?>" />
                    </div>
                </div>

                <div class="form-group">
                    <label for="text1" class="control-label col-lg-4">Company Name</label>

                    <div class="col-lg-8">
                        <input name="siteinfo_name" type="text" id="text1" placeholder="Company Name !" class="form-control"  value="<?php if(isset($siteinfo_data)){ echo $siteinfo_data['siteinfo_name']; } ?>"/>
                    </div>
                </div>

                <div class="form-group">
                    <label for="text1" class="control-label col-lg-4">Slogan</label>

                    <div class="col-lg-8">
                        <input name="siteinfo_slogan" type="text" id="text1" placeholder="Enter company Webmail !" class="form-control" value="<?php if(isset($siteinfo_data)){ echo $siteinfo_data['siteinfo_slogan']; } ?>" />
                    </div>
                </div>

                <div class="form-group">
                    <label for="text1" class="control-label col-lg-4">Webmail</label>

                    <div class="col-lg-8">
                        <input name="siteinfo_webmail" type="text" id="text1" placeholder="Enter company Webmail !" class="form-control" value="<?php if(isset($siteinfo_data)){ echo $siteinfo_data['siteinfo_webmail']; } ?>" />
                    </div>
                </div>



                <div class="form-group">
                    <label for="text1" class="control-label col-lg-4">Contact Number</label>

                    <div class="col-lg-8">
                        <input name="siteinfo_contact" type="text" id="text1" placeholder="e.g- +880 0123 XXXXXX !" class="form-control" value="<?php if(isset($siteinfo_data)){ echo $siteinfo_data['siteinfo_contact']; } ?>" />
                    </div>
                </div>


                <div class="form-group">
                    <label for="text1" class="control-label col-lg-4">Sub Contact Number</label>

                    <div class="col-lg-8">
                        <input name="siteinfo_subcontact" type="text" id="text1" placeholder="e.g- +880 0123 XXXXXX !" class="form-control" value="<?php if(isset($siteinfo_data)){ echo $siteinfo_data['siteinfo_subcontact']; } ?>" />
                    </div>
                </div>

                <div class="form-group">
                    <label for="text2" class="control-label col-lg-4">Copyright</label>

                    <div class="col-lg-8">
                        <input name="siteinfo_copyright" type="text" id="text2" placeholder="placeholder text" class="form-control" value="<?php if(isset($siteinfo_data)){ echo $siteinfo_data['siteinfo_copyright']; } ?>" />
                    </div>
                </div>

                <div class="form-group">
                    <label for="limiter" class="control-label col-lg-4">Company Address</label>

                    <div class="col-lg-8">
                        <textarea name="siteinfo_address" id="limiter" class="form-control"><?php if(isset($siteinfo_data)){ echo $siteinfo_data['siteinfo_address'];} ?></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label for="text4" class="control-label col-lg-4"></label>

                    <div class="col-lg-8">
                        <textarea name="siteinfo_map" id="text4" class="form-control"><?php if(isset($siteinfo_data)){ echo $siteinfo_data['siteinfo_map'];} ?></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label for="autosize" class="control-label col-lg-4">Keywords</label>

                    <div class="col-lg-8">
                        <textarea name="siteinfo_keywords" id="autosize" class="form-control"><?php if(isset($siteinfo_data)){ echo $siteinfo_data['siteinfo_keywords'];} ?></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="autosize" class="control-label col-lg-4">Descrptions</label>

                    <div class="col-lg-8">
                        <textarea name="siteinfo_discription" id="autosize" class="form-control"><?php if(isset($siteinfo_data)){ echo $siteinfo_data['siteinfo_discription'];} ?></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="autosize" class="control-label col-lg-4">Tags</label>

                    <div class="col-lg-8">
                        <textarea name="siteinfo_tags" id="autosize" class="form-control" placeholder="Add Site Tags !"><?php if(isset($siteinfo_data)){ echo $siteinfo_data['siteinfo_tags'];} ?></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label for="tags" class="control-label col-lg-4"></label>

                    <div class="col-lg-8">
                        <button name="siteinfo_update" type="submit" class="form-control btn btn-danger" name="" value="">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
   
    </div>



        </div>


</div>

   
        <!-- END PAGE CONTENT -->








<!-------------------------------------------------------------------->
<!-------------------------------------------------------------------->
<?php include 'footer.php'; ?>
<!-------------------------------------------------------------------->
<!---------------------------------------------------------------->
<!----------------------------------------------------->
<!-------------------------------------------->
<!------------------------------------>
<!--------------------------->