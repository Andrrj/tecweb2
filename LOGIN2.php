<?php
require "conBd.php";
$login=$_GET['login'];
$senha=$_GET['senha'];
$bd = new Bd();
$sql ="select * from usuario where descr = '".$login."' and senha = '".$senha."'";
$count = $bd->linhas($sql);

echo $count;

?>
