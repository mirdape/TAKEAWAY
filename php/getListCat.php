<?php
//Para comprobar si se recibe un post desde un ajax
if ($_SERVER['REQUEST_METHOD']==='GET'){
		$sql = "SELECT * FROM categoria";
		$mysqli=new mysqli ('127.0.0.1','root','','takeaway');
		mysqli_set_charset($mysqli,"utf8");
		if ($mysqli){
			$query=$mysqli->query($sql);
			$mysqli->close();
			$rows = $query->fetch_all(MYSQLI_ASSOC);
		}

	if ($query) {
	echo json_encode([
		"query"	=> $rows,
		"error" 	=> 0,
		"resultado" => "se ha cargado"
		]);
	}
	else {
	echo json_encode([
		"query"	=> $rows,
		"error" 	=> 1,
		"resultado" => "NO se ha cargado"
		]);
	}
}
else {
echo json_encode([
	"query" 	=> "ko",
	"error" 	=> 1,
	"resultado"	=> "no hay"
	
	]);
}
?>