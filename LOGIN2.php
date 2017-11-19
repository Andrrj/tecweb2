<?php
require "conBd.php";
require "ValAcess.php";
$val = new validacao();
$login=$_GET['login'];
$senha=$_GET['senha'];
$bd = new Bd();
$sql = "select count(*) from usuario where descr = '".$login."' and senha = '".$senha."'";

$consulta = $bd->consulta($sql);
if($consulta->fetchColumn() == 1){
  $_SESSION['login']=$login;
  $_SESSION['senha']=$senha;
  echo $_SESSION['login'];
  echo $_SESSION['senha'];
//  $_SESSION['perfil']=null;
header('location:principal.php');
}else{
echo ' login / senha inválidos.';
};

?>
