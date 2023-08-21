<?php

require "config.php";

$matricula=$_POST["matricula"];
$nome=$_POST["nome"];
$endereco=$_POST["endereco"];
$cidade=$_POST["cidade"];
$codcurso=$_POST["codcurso"];

$insert = $pdo->prepare("INSERT INTO alunos(matricula, nome, endereco, cidade, codcurso)
values ('$matricula', '$nome', '$endereco', '$cidade', '$codcurso')");

if($insert->execute()) {
    echo "Inclusão efetuada com sucesso!";
    echo "<p align='center'><a href='index.html'>Voltar para o Menu</a>";
    echo "<p align='center'><a href='index_cadastro.html'>Voltar para Cadastros</a>";
}

?>