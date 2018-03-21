<!DOCTYPE html>
<html>
<head>
	<title>Calcular Corriente</title>
</head>
<body>

	<h1>Calcular Corriente</h1>

	<form method="post">
		<label>Ingrese el Voltaje:</label> <br>
		<input type="text" name="voltaje"> <br><br>

		<label>Ingrese la Resistencia:</label> <br>
		<input type="text" name="resistencia"> <br><br>

		<input type="submit" value="Calcular">
	</form>
	<br>

</body>

<?php
	if(isset($_POST['voltaje']) && isset($_POST['resistencia']))
	{
		$volt = $_POST['voltaje'];
		$resist = $_POST['resistencia'];

		$corriente = $volt / $resist;
		echo "La Corriente tiene una intensidad de: ".$corriente." Amperios";
	}
?>

</html>