<?php
require 'ValAcess.php';
$val = new validacao();
$val->validaradmin();
require 'conBD.php';
if (isset($_SESSION['TABELA'])) {}else{
$_SESSION['TABELA'] = $_GET['id'];
}

$Bd = new Bd();
$sql ="select * from ".$_SESSION['TABELA'];
echo "Página para editar informações de ".$_SESSION['TABELA'];
echo "<p><a href=principal.php>Voltar</a></p>";
echo "<p><a href=incluir.php>Incluir</a></p>";
echo"<table border=1>";
echo "<tr> <th>id</th>
           <th>".$_SESSION['TABELA']."</th>
";
if($_SESSION['TABELA']=="usuario"){
  ECHO  "<th>Senha</th>";
};
echo'
           <th colspan="2">Ajustes</th>

      </tr>';
      echo"<tbody>";
foreach ($Bd->consulta($sql) as $linha) {
  echo "<tr>";
  echo "<td>".$linha['id']."</td>";
  echo "<td>".$linha['descr']."</td>";
  if($_SESSION['TABELA']=="usuario"){
    ECHO  "<th>".$linha['senha']."</th>";
  };
  echo "<td> <a href=editar.php?id=".$linha['id'];
  echo ">Editar</a></td>";
  echo "<td> <a href=excluir.php?id=".$linha['id'];
  echo ">Excluir</a></td>";
  echo "</tr>";
}
      echo "</tbody></table>";

?>
