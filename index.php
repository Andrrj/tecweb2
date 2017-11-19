<?php
require 'ValAcess.php';
$val = new validacao();
$_SESSION['login']=null;
$_SESSION['senha']=null;
$_SESSION['perfil']=null;
?>

<html>
<head>
	<meta charset=utf-8>
	<title>Inserir Informações</title></head>
<body>
	<form action=login2.php>
	<p>USUARIO:<input type=text name=login></p>
<p>SENHA:<input type=text name=senha></p>
<?php
if(isset($_SESSION['perfil'])){echo $_SESSION['msgerro'];}
session_destroy();
 ?>
 	<p><input type=submit value=LOGIN></p>
	</form>
</body>
</html>
