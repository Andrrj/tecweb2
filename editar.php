<?php
require "conBD.php";
require "objeto.php";

$bd = new Bd();
$id = $_GET['id'];
$sql = "select * from ".$_SESSION['TABELA']." where id = $id";

foreach ($bd->consulta($sql) as $linha) {

echo "<html>
<head>
	<meta charset=utf-8>
	<title>Aula de Alteração</title></head>
<body>
	<form action=editar2.php>
	    <input type=hidden name=id
	    value=".$linha['id'].">
	<p>Nome:
	    <input type=text name=descr
	    value='".$linha['descr']."'>
	</p>";
	if($_SESSION['TABELA']=="usuario"){
    ECHO  "Senha: <input type=text name=senha
					value=".$linha['senha'].">";
  }
echo	"	<p><input type=submit value=alterar></p>
	</form>
</body>
</html>
";
  }


?>
