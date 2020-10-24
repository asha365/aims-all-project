<?php  echo '<h1>Function in PHP</h1><hr/>'; ?>
<form action="" method="post">
	Number 1 <input type="text" name="n1">
	Number 2 <input type="text" name="n2">
	
	<input type="radio" value="addition" name="operation">Add
	<input type="radio" value="substruction" name="operation">Sub
	<input type="radio" value="multiplication" name="operation">Mul
	<input type="radio" value="division" name="operation">DIV
	
	<input type="submit" value="Calculate"><Br/><br/>
</form>
<?php 
	$a = $_POST['n1']; 
	$b = $_POST['n2']; 
	$op = $_POST['operation'];
	
	include 'func.php';
	
	if($op == 'addition')
	{
		add($a,$b);
	}	
	
	if($op == 'substruction')
	{
		sub($a,$b);
	}	
	
	if($op == 'multiplication')
	{
		mul($a,$b);
	}	
	
	if($op == 'division')
	{
		div($a,$b);
	}
	
?>