<?php
class Bd
{
	private $dbh;
//função construct realiza a conexão com o banco de dados.
	public function __construct()
	{
		$dsn = 'mysql:dbname=tecweb;host=127.0.0.1';
		$user = 'root';
		$password = '';
		try {
			$this->dbh = new PDO($dsn, $user, $password);
			return true;
		}
		catch (PDOException $e) {
			echo 'Connection failed: '.$e->getMessage();
			return false;
		}
	}
//a Função executar somente retorna o número de registros da consulta;
public function executar($sql){
	$count = null;
		if (empty($sql)) {
		echo "sql em branco";
		return false;
	}

	echo $sql;

	$count = $this->dbh->exec($sql);

	return $count;
}
//retorna efetivamente os dados da consulta em um objeto.
	public function consulta($sql){
		if (empty($sql)) {
			echo "sql em branco";
			return false;
		}
//PDO::query — Executes an SQL statement,returning a result set as a PDOStatement object
		return $this->dbh->query($sql) ;
	}

	public function batata($sql){
		if (empty($sql)) {
			echo "sql em branco";
			return false;
		}
//PDO::query — Executes an SQL statement,returning a result set as a PDOStatement object
		return $this->dbh->query($sql) ;

	}

}
?>
