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
                                <div id="div-1" class="body collapse in">
                                    <form>
                                        <textarea id="wysihtml5" class="form-control" rows="10"></textarea>

                                        <div class="form-actions">
                                            <br />
                                            <input type="submit" value="Submit" class="btn btn-primary" />
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-lg-12">
                            <div class="box">
                                <header>
                                    <div class="icons"><i class="icon-th-large"></i></div>
                                    <h5>WYSIWYG Editor</h5>
                                    <ul class="nav pull-right">
                                        <li>
                                            <div class="btn-group">
                                                <a class="accordion-toggle btn btn-xs minimize-box" data-toggle="collapse"
                                                    href="#cleditorDiv">
                                                    <i class="icon-minus"></i>
                                                </a>
                                                <button class="btn btn-xs btn-danger close-box">
                                                    <i
                                                        class="icon-remove"></i>
                                                </button>
                                            </div>
                                        </li>
                                    </ul>
                                </header>

                                <div id="cleditorDiv" class="body collapse in">
                                    <form>
                                        <textarea id="cleditor" class="form-control"></textarea>

                                        <div class="form-actions no-margin-bottom" id="cleditorForm">
                                            <br />
                                            <input type="submit" value="Submit" class="btn btn-primary" />
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="box">
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
                                            <textarea class="form-control wmd-input" rows="10" name="description" id="wmd-input">
**Demo Text**
                        </textarea>
                                             <div class="form-actions no-margin-bottom" id="Div1">
                                            <br />
                                            <input type="submit" value="Submit" class="btn btn-primary" />
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