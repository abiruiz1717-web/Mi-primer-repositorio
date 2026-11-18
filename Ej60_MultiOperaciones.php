<DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF=8">
	<title>Operaciones de 3 pares de números</title>
</head>
<body>
	<h2>Capturar 3 números en un vector</h2>
	<form method="POST" action="">
		<?php
		for ($i=0; $i<3; $i++) {
		echo "Primer número: ";
		echo "<input type='number' min='51' max='99' name='N1[]'>"." ";
		echo "Segundo número: ";
		echo "<input type='number' min='-50' max='-1' name='N2[]'>"." ";
		echo "<br><br>";
	}
	?>
	<button type="submit" name="guardar" value="guardar">Guardar</button>
	<?php
	if (isset($_POST['guardar'])) {
		$N1=$_POST['N1'];
		$N2=$_POST['N2'];

		$s=array();
		$r=array();
		$m=array();
		$d=array();

		for ($i=0; $i<3; $i++) {
			$s[$i]=$N1[$i]+$N2[$i];
			$r[$i]=$N1[$i]-$N2[$i];
			$m[$i]=$N1[$i]*$N2[$i];
			$d[$i]=$N1[$i]/$N2[$i];
		}
		echo "<h3>Primeros números</h3>";
		echo "<table border='1' text-align:center;'>";
		for ($i=0; $i<3; $i++) {
 		   echo "<tr>";
 		   echo "<td width='80' height='35'>".$N1[$i]."</td>";
 		   echo "</tr>";
		}
		echo "</table><br>";

		echo "<h3>Segundos números</h3>";
		echo "<table border='1' text-align:center;'>";
		for ($i=0; $i<3; $i++) {
 		   echo "<tr>";
 		   echo "<td width='80' height='35'>".$N2[$i]."</td>";
 		   echo "</tr>";
		}
		echo "</table><br>";

		echo "<h3>Suma</h3>";
		echo "<table border='1' text-align:center;'>";
		for ($i=0; $i<3; $i++) {
 		   echo "<tr>";
 		   echo "<td width='80' height='35'>".$s[$i]."</td>";
 		   echo "</tr>";
		}
		echo "</table><br>";

		echo "<h3>Resta</h3>";
		echo "<table border='1' text-align:center;'>";
		for ($i=0; $i<3; $i++) {
 		   echo "<tr>";
 		   echo "<td width='80' height='35'>".$r[$i]."</td>";
 		   echo "</tr>";
		}
		echo "</table><br>";

		echo "<h3>Multiplicación</h3>";
		echo "<table border='1'  text-align:center;'>";
		for ($i=0; $i<3; $i++) {
 		   echo "<tr>";
 		   echo "<td width='80' height='35'>".$m[$i]."</td>";
 		   echo "</tr>";
		}
		echo "</table><br>";

		echo "<h3>División</h3>";
		echo "<table border='1'  text-align:center;'>";
		for ($i=0; $i<3; $i++) {
 		   echo "<tr>";
 		   echo "<td width='80' height='35'>".number_format($d[$i],2)."</td>";
 		   echo "</tr>";
		}
		echo "</table><br>";
	}
	?>
</form>
</body>
</html>