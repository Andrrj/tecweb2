<?php
require 'ValAcess.php';
$val = new validacao();
$val->validaradmin();
?>
<html>
<head>
	<meta charset=utf-8>
	<title>Inserir Informações</title></head>
<body>
	<form action=incluir2.php>
	<p>Nome:<input type=text name=descr></p>
<?php
if($_SESSION['TABELA']=='usuario'){
	ECHO "<p>SENHA:<input type=text name=senha></p>";
}
 ?>
	<p><input type=submit value=incluir></p>
	</form>
</body>
</html>
