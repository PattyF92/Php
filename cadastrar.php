<?php

//Incluir a conexão
include("conexao.php");

//Obter dados
$bterDados = file_get_contents("php://input");

//Extrair os dados do JSON
$extrair = json_decode($bterDados);

//Separar os dados do JSON
$nomeCurso = $extrair->nomeCurso;
$valorCurso = $extrair->valorCurso;

//SQL
$sql = "INSERT INTO cursos (nomeCurso, valorCurso) VALUES ('$nomeCurso', $valorCurso)";
mysqli_query($conexao, $sql);

//Exportar dados cadastrados
$curso = [
    'nomeCurso' => $nomeCurso,
    'valorCurso' => $valorCurso
];

//json_encode(['curso'] => $curso);

?>