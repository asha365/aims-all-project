<div style="width:80%; margin:50px auto; border:1px solid #024; height:400px; ">
<h1 style="background:#024; margin:0px; padding:0px; color:white;">01. PHP VARIABLE</h1>
<div style="height:280px; padding:4%;">
<form method="GET" action="">
N1 = <input type="text" name="n1">
N2 = <input type="text" name="n2"> = 
<input type="submit" value="check" name="submit"/><br/>
</form>
<hr/>
<?php 

if(isset($_GET['submit'])){

	$n1 = $_GET['n1']; 
	$n2 = $_GET['n2']; 

		if($n1>$n2){
			echo 'The Largest Number is = '.$n1; 
		}else{
			echo 'The Largest Number is = '.$n2;
		}
}




/*





echo 'Addition = '.($n1+$n2).'<br/>'; 
echo 'Subtruction = '.($n1-$n2).'<br/>';  
echo 'Multiplication = '.$n1*$n2.'<br/>'; 
echo 'Division = '.$n1/$n2; 

$name = $_POST['student']; 
$_name = $_POST['student'];  
$name = 90; 

echo $name.' is very good boy.'.$name.' has only 60 childs. 
	'.$name.' is one of the greatest man of this broken world !
	'.$name.' has 90 unproductive wife. 
';
*/
?>
</div>
<h4 style="background:#024; text-align:center; margin:0px; padding:0px; color:white;">AIMS &mdash; 365</h4>
</div>