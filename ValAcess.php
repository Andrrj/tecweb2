<?php

class validacao {
  public function __construct(){
    session_start();
  }
  public function validargeral(){
  if($_SESSION['login'] == null){
    $_SESSION['msgerro'] = "Voce não estalogado no sistema!";
  header('location:index.php');}
  }
  public function validaradmin(){
  //if($_SESSION['validado'] == false;
  //header('location:index.php');}
    echo "pendente realizar a validação de acesso!";
  }
}
 ?>
