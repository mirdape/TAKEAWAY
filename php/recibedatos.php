<?php
echo "<h1>Su formulario ha sido enviado con éxito</h1>";
//se comprueba que llegan datos metodo POST
if ($_POST){
	echo"Llegan variables por post:<br>";
	echo $_POST ['nombreApellido'];
	echo "<br>";
	echo $_POST ['email'];
	echo "<br>";
	echo $_POST ['mensaje'];
	$nombre=$_POST ['nombreApellido'];
	$email=$_POST ['email'];
	$mensaje=$_POST ['mensaje'];
	$mysqli=new mysqli ('127.0.0.1','root','','takeaway');
	mysqli_set_charset($mysqli,"utf8");
	if ($mysqli)
	{
		$sql="INSERT INTO takeaway.contactform ( nombreApellidos, email, mensaje) VALUES ('$nombre', '$email', '$mensaje');";
		$query=$mysqli->query($sql);
		if ($query)
		{
			echo "se ha guardado correctamente la información";
		}
		else 
		{
			echo "Ha habido un problema con el registro del formulario";
		}
	}
	$mysqli->close();
	}
	
else 
	{echo "No llega nada por post";}
?>