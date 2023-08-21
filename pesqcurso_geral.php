<html>
<head>
 
<title>Lista dos Cursos</title>
 
<style>
#customers {
  font-family:Montserrat, sans-serif;
  border-collapse: collapse;
  width: 50%;
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


 
$consulta = $pdo->prepare("SELECT * FROM cursos");
$consulta->execute();
 
?>
 
<p align="center"> <table id="customers" >
<tr>
<td  bgcolor="#FE6601" align="center"> <font color="#ffffff "><b>Lista Geral dos Cursos<font></b></p></td>
</tr>
 
<table width=740 id="customers" >
 
  <tr>
    <th>Curso</th>
    <th>Código</th>
  </tr>
  
<?php
//Exibe as linhas encontradas na consulta
while($row = $consulta->fetch(PDO::FETCH_ASSOC)) {
?>
 
<tr>
<td><?php echo $row['nomecurso'];?></td>
<td><?php echo $row['codigo'];?></td>
</tr>
 
<?php
}
?>
 
</table>
 
<p> <p>
<a href='index.html'><p align="center"> Voltar ao Menu Principal</p></a>
<a href='index_listgeral.html'><p align="center"> Voltar para Listas Gerais</p></a>
 
</body>
</html>