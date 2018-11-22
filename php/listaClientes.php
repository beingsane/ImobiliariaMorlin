<?php 
	include("conexaoMySQL.php");
	
	
	class Cliente{
		public $Id;
		public $Nome;
	}

		
	function getCliente($conn){
		
		$listaCliente = '';
		$listaCliente = array();
		$sqlf = "
            SELECT Id, nome FROM cliente;
		";
		
		$stmt = $conn->prepare($sqlf);
		$stmt->execute();
		$stmt->bind_result($Id, $nome);
		
		while($stmt->fetch()) {
			$Cliente = new Cliente();
            
            $Cliente->Id = $Id;
			$Cliente->nome = $nome;
			
			$listaCliente[] = $Cliente;
		}
		return $listaCliente;
	};	
	
	$msgErro = "";

	try{
		$listaCliente = getCliente($conn);  
	}catch (Exception $e){
		$msgErro = $e->getMessage();
	}

?>
