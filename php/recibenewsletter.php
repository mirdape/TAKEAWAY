<?php
//se comprueba que llegan datos metodo POST
if ($_POST){
	echo $_POST ['email'];
	echo "<br>";
	$email=$_POST ['email'];
	$mysqli=new mysqli ('127.0.0.1','root','','takeaway');
	mysqli_set_charset($mysqli,"utf8");
	if ($mysqli)
	{
		
		$sql="INSERT INTO newsletter (email) VALUES ('$email');";
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