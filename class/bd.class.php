<?php
class Bd
{	
	public $conexao;
	
	// Faz conexão com os bancos listados
	function __construct()
	{		
		/* cnx banco de dados*/
		$servidor="localhost";
		$banco="clinica";
		$usuario="root";
		$senha="";

		//Conexão
		$this->conexao = new PDO('mysql:host='.$servidor.';dbname='.$banco.'', $usuario, $senha,
		    array(
		        PDO::ATTR_PERSISTENT => true
		    )
		);
	}
}



?>