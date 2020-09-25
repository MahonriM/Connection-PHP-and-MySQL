<?php
$link='mysql:host=localhost;dbname=prueba';
$usuario='root';
//$pass=;
try{
	$pdo= new PDO($link,$usuario);
	print("<h1>Conectado con Exito eres un crack</h1>");
}catch(PDOException $e){
	print("Error");
	die();
}
?>
