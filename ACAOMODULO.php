<?php
require "conBD.php";
require "objeto.php";

$bd = new Bd();

$sql = "select * from acao";
  echo"<table border=1>";
  echo "<tr> <th>idAcao</th>
             <th>DescAcao</th>
             <th>validar</th>
        </tr>
        <tbody>";
  foreach ($bd->consulta($sql) as $linha) {
    echo "<tr>";
    echo "<td>".$linha['id']."</td>";
    echo "<td>".$linha['descr']."</td>";
    echo "<td> <input type='checkbox' name='acoescbx' value='".$linha['id']."'";
    echo ">Editar</a></td>";
    echo "</tr>";
  }
    echo "</tbody></table>";
///fim da tabela 1
$sql = "select * from modulo";
ECHO 'Selecione o Módulo a ser alterado:<select name="modulo">';
  foreach ($bd->consulta($sql) as $linha) {

  echo '<option value="'.$linha['id'].'">'.$linha['descr'].'</option>';

}
ECHO '/select></br>';








?>
