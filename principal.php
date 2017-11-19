<?php
require 'ValAcess.php';
$val = new validacao();
$val->validargeral();
$_SESSION['TABELA']=NULL;

echo "<h3>Usuário ".$_SESSION['login']." | Perfil Y | SAIR</h3>
      <h1>Acesso do Perfil
      Relação de Acessos por Usuário.
      </h1>
      <h2>Admin</h2>
      <h3><p><a href=crudAdmin.php?id=acao>ADMINISTRAR AÇÕES</a>
      <p><a href=crudAdmin.php?id=modulo>ADMINISTRAR MODULOS</a>
      <p><a href=crudAdmin.php?id=perfil>ADMINISTRAR PERFIL</a>
      <p><a href=crudAdmin.php?id=usuario>ADMINISTRAR USUÁRIOS</a>
      <p><a href=ACAOMODULO.php>EDITAR AÇÕES LIGADAS A MODULOS</a>
      <p><a href=crudAdmin.php>EDITAR MODULOS LIGADOS A PERFIS</a>
      <p><a href=crudAdmin.php>EDITAR PERFIS DE USUAIOS</a>
      </h3>";
?>
