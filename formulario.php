<?php
	session_start();
	if ($_SESSION["INICIOSESION"]!=1) {
		header("Location:logueo.php");
	}
	$num=$_GET["NumeroA"];
	$num2=$_GET["NumeroB"];
	$op=$_GET["operador"];
	/*switch ($op) {
		case '+':
			$result=$num+$num2;
			break;
		case '-':
			$result=$num-$num2;
			break;
		case '*':
			$result=$num*$num2;
			break;
		case '/':
			$result=$num/$num2;
			break;
		default:
			$result="no es una operaci&oacute;n valida";
			break;
	}
	if($op=='+') $result=$num+$num2;
	else if($op=='-') $result=$num-$num2;
	else if($op=='*') $result=$num*$num2;
	else if($op=='/') $result=$num/$num2;
	else $result="no es una operaci&oacute;n valida";*/

	$result=($op=='+')?($result=$num+$num2):
			(($op=='-')?($result=$num-$num2):
			(($op=='*')?($result=$num*$num2):
			(($op=='/')?($result=$num/$num2):
			($result="no es una operaci&oacute;n valida"))));
?>

<!Doctype html>
<html>
<head>
	<title> Calculadora </title>
</head>
<body>
	<form method="GET">
		<label> Numero A : </label>
		<input type="text" name="NumeroA" value="<?php echo $num ?>"><br><br>
		<label> Numero B : </label>
		<input type="text" name="NumeroB" value="<?php echo $num2 ?>"><br><br>
		<select name="operador">
			<option <?php if($op=="+") echo "selected"?> value="+">Suma</option>
			<option <?php if($op=="-") echo "selected"?> value="-">Resta</option>
			<option <?php if($op=="*") echo "selected"?> value="*" >Multiplicacion</option>
			<option <?php if($op=="/") echo "selected"?> value="/">Division</option>
		</select><br><br>
		<input type="submit" value="calcular"><br><br>
	</form>
	<label><?php echo $result ?></label>
</body>
</html>
