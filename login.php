<?php
include 'conn.php';
          
$usuario = $_POST['login'];
$senha = md5($_POST['senha']);

if($_POST['senha'] == ""){
 	echo "falha";
}else{
	$sql = "SELECT * FROM usuario_estoque where email='".$usuario."' and senha='".$senha."' order by id"; 
	$result = $conn->query($sql);
	$total_records = $result->num_rows;  //count number of records
				
	if($total_records > 0){
		echo "sucesso";
	}else{
		echo "falha";
	}
}

?>