<?php

require "config.php";

$codigo=$_POST["codigo"];
$nomecurso=$_POST["nomecurso"];

$insert = $pdo->prepare("INSERT INTO cursos(codigo, nomecurso)
values ('$codigo', '$nomecurso')");

if($insert->execute()) {
    echo "Inclusão efetuada com sucesso!";
    echo "<p align='center'><a href='index.html'>Voltar para o Menu</a>";
    echo "<p align='center'><a href='index_cadastro.html'>Voltar para Cadastros</a>";
}

?>