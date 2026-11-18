<DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF=8">
	<title>Matrices</title>
</head>
<body>
<table border="1">
<?php
echo "<h2>Matriz A</h2>";
$numeros1=array();
$v1=100;
for ($f=0;$f<3;$f++) {
	echo "<tr>";
	for($c=0;$c<3;$c++) {
		$numeros1[$f][$c]=$v1;
		echo "<td>",$v1,"</td>";
		$v1+=10;
	}
}
?>
</table>
<table border="1">
<?php
echo "<h2>Matriz B</h2>";
$numeros2=array();
$v2=500;
for ($f=0;$f<3;$f++) {
	echo "<tr>";
	for($c=0;$c<3;$c++) {
		$numeros2[$f][$c]=$v2;
		echo "<td>",$v2,"</td>";
		$v2+=20;
	}
}
?>
</table>
<table border="1">
<?php
echo "<h2>Matriz C</h2>";
for ($f=0;$f<3;$f++) {
	echo "<tr>";
	for($c=0;$c<3;$c++) {
		$v=$numeros1[$f][$c]+$numeros2[$f][$c];
		echo "<td>",$v,"</td>";
	}
}
?>
</table>
</body>
</html>