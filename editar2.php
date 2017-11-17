<?php
require "conBd.php";
require "objeto.php";

$bd = new Bd();
$pessoa = new objeto($_GET);
$sql =$pessoa->getSQL();

$count = $bd->executar($sql);
header('location:crudAdmin.php')

?>
