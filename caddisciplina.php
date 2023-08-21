<?php

require "config.php";

$codigo=$_POST["codigo"];
$disciplina=$_POST["disciplina"];
$cargahoraria=$_POST["cargahoraria"];
$codcurso=$_POST["codcurso"];

$insert = $pdo->prepare("INSERT INTO disciplinas(codigo, disciplina, cargahoraria, codcurso)
values ('$codigo', '$disciplina', '$cargahoraria', '$codcurso')");

if($insert->execute()) {
    echo "Inclusão efetuada com sucesso!";
    echo "<p align='center'><a href='index.html'>Voltar para o Menu</a>";
    echo "<p align='center'><a href='index_cadastro.html'>Voltar para Cadastros</a>";
}

?>