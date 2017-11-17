<?php
require 'ValAcess.php';
$val = new validacao();
$val->validaradmin();
require "CONBd.php";

$bd = new Bd();

$id = $_GET['id'];
$sql = "delete from ".$_SESSION['TABELA']." where id = $id";
$count = $bd->executar($sql);
header('location:crudAdmin.php')
?>
