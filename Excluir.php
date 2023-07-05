<?php

//Incluir a conexão
include("conexao.php");

//Obter dados
$bterDados = file_get_contents("php://input");

//Extrair os dados do JSON
$extrair = json_decode($bterDados);

//Separar os dados do JSON
$idCurso = $extrair->cursos->idCurso;

//SQL
$sql = "DELETE FROM cursos WHERE idCurso=$idCurso";
#mysqli_query($conexao, $sql);


?>