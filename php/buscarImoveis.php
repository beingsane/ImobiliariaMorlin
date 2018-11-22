<?php 
	include("conexaoMysql.php");
	
	
	class Imovel{
		public $valor_cond;
        public $qtd_quartos;
        public $area_;
        public $qtd_suites;
        public $qtd_salas;
        public $qtd_garagem;
        public $armario;
        public $imagens;
	}

		
	function getImovel($conn){
		
		$listaImovel = '';
		$listaImovel = array();
		$sqlf = "
            SELECT tipo, qtd_quartos, qtd_suites, qtd_salas, qtd_garagem, armario, area_, andar, valor_cond, portaria,
            categoria, endereco, cidade, bairro, estado, Id_cliente, imagens
            FROM imovel;
		";
		
		$stmt = $conn->prepare($sqlf);
		$stmt->execute();
        $stmt->bind_result($tipo, $qtd_quartos, $qtd_suites, $qtd_salas, $qtd_garagem, $armario, $area_, $andar, $valor_cond, $portaria,
            $categoria, $endereco, $cidade, $bairro, $estado, $Id_cliente, $imagens
        );
		
		while($stmt->fetch()) {
			$Imovel = new Imovel();
            
            $Imovel->valor_cond = $valor_cond;
            $Imovel->qtd_quartos = $qtd_quartos;
            $Imovel->area_ = $area_;
            $Imovel->qtd_suites = $qtd_suites ;
            $Imovel->qtd_salas = $qtd_salas;
            $Imovel->qtd_garagem = $qtd_garagem;
            $Imovel->armario = $armario;
            $Imovel->imagens = $imagens;

            
			
			$listaImovel[] = $Imovel;
		}
		return $listaImovel;
	};	
	
	$msgErro = "";

	try{
		$listaImovel = getImovel($conn);  
	}catch (Exception $e){
		$msgErro = $e->getMessage();
	}

?>
