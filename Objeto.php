<?php
session_start();
class objeto
{
	private $id, $desc, $senha;

	public function __construct($get)
	{
		 if (isset($get['id'] ) ) {
				$this->id = $get['id'];
		 }else{
			$this->id = null;
		 }
		 if (isset($get['descr'] ) ) {
			 $this->desc = $get['descr'];
		}else{
		 $this->desc = null;
		}
		if (isset($get['senha'] ) ) {
			$this->senha = $get['senha'];
	 }else{
		$this->senha = null;
	 }
	}

	public function getSQL(){

	if ( empty($this->id) ) {
			if($_SESSION['TABELA']=='usuario'){
					$sql = "insert into ".$_SESSION['TABELA']."(descr, senha)
									values('".$this->desc."','".$this->senha."') ";
			}else{
					$sql = "insert into ".$_SESSION['TABELA']."(descr)
					values('".$this->desc."') ";}
  }else{
			if($_SESSION['TABELA']=='usuario'){
					$sql = "update ".$_SESSION['TABELA']."
					set descr='$this->desc' , senha='$this->senha'
					where id =$this->id";
			}else{
					$sql = "update ".$_SESSION['TABELA']."
									set descr='$this->desc'
									where id =$this->id";
			}
			}
	return $sql;
	}

	public function getDelete(){
		if ( empty($this->id) ) {
			echo "Não existe o ID";
		}else{
			$sql = "delete from ".$_SESSION['TABELA']."
							where id =".$this->id;
			return $sql;
		}
	}
}
?>
