<?php
	//   ++++++++++++  D A O +++++++++++
	//        Data Acess Object
	
	$conn = new PDO("mysql:host=localhost;dbname=dbphp7","root","");

	$conn->beginTransaction();

	$stmt = $conn->prepare(" DELETE  FROM tb_usuarios WHERE idusuario = ?"); 
	/* se for mais de um parametro
	 =? ? */
	
	$id = 7;
	
	$stmt->execute(array($id)); /* se form mais )$id, $idoutro); etc */

	//$conn->rollback();
	$conn->commit();
	
	echo "Dados <strong> DELETADOS </strong> com sucesso Id nº   ".$id;

?>