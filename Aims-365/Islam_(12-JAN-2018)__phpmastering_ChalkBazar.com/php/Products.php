

<div class="col-md-9" style=" padding-top:30px; ">
<!---->
<div class="row">

<?php 

  if(isset($_GET['cat'])){ 
  
    $catid = $_GET['cat']; 
    $qry_product = "SELECT * FROM tb_product WHERE product_category='$catid'"; 

  }else{
    $qry_product = "SELECT * FROM tb_product LIMIT 2"; 
  }

  
  $result_product = $DB->select($qry_product); 
  if($result_product){
    while($data_product = $result_product->fetch_array()){
?>
  <div class="col-sm-6 col-md-3">
    <div class="thumbnail" style="border:0px; box-shadow:0PX; ">
      <img src="prof/1.jpg" alt="n/a" style="width:100%; height:150px; ">
      <div class="caption" style="background:#002060; color:white; "> Name 1 </div>
    </div>
  </div>
<?php 
    }
  }else{
    echo '<hr/><h1 class="text-info text-center">No Product Available</h1></hr/>';
  }
?>
  
</div>	
<!---->	
	</div>
</section>
<!--------------------------------------------------------------------------->
<!--------------------------------------------------------------------------->
<!--------------------------------------------------------------------------->