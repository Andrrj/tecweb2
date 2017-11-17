<?php
require "conBd.php";
require "objeto.php";

$bd = new Bd();
$obj = new objeto($_GET);
$sql =$obj->getSQL();
$count = $bd->executar($sql);
header('location:crudAdmin.php')
?>
