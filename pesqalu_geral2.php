<html>
<head>
 
<title>Lista dos Alunos</title>
 
<style>
#customers {
  font-family:Montserrat, sans-serif;
  border-collapse: collapse;
  width: 100%;
}
 
#customers td, #customers th {
  border: 2px solid #dedede;
  padding: 13px;
}
 
#customers tr:nth-child(even){background-color: #ffffff;}
 
#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #e3e3e3;
  color: black;
}
</style>
 
</head>
<body>
<?php
 
//importa o arquivo de configuração de conexão do MySQL
require "config.php";
 
$consulta = $pdo->prepare("SELECT * FROM alunos");
$consulta->execute();
 
?>
 
<p align="center"> <table id="customers" >
<tr>
<td  bgcolor="#343a40" align="center"> <font color="#ffffff "><b>Lista Geral dos Alunos<font></b></p></td>
</tr>
 
<table width=740 id="customers" >
 
  <tr>
    <th>Matrícula</th>
    <th>Nome</th>
    <th>Endereço</th>
    <th>Cidade</th>
    <th>Cod.curso</th>
  </tr>
  
<?php
//Exibe as linhas encontradas na consulta
while($row = $consulta->fetch(PDO::FETCH_ASSOC)) {
?>
 
<tr>
<td><?php echo $row['matricula'];?></td>
<td><?php echo $row['nome'];?></td>
<td><?php echo $row['endereco'];?></td>
<td><?php echo $row['cidade'];?></td>
<td><?php echo $row['codcurso'];?></td>
</tr>
 
<?php
}
?>
 
</table>
 
 
</body>
</html>