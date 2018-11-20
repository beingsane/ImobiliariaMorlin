<?php
	include("conexaoMySQL.php");
	
		
	function filtraEntrada($dado){
		$dado = trim($dado);
		$dado = stripslashes($dado);
		$dado = htmlspecialchars($dado);
		return $dado;
	}	
	
	if($_SERVER["REQUEST_METHOD"] == 'POST'){
		$msgErro = '';
		$andar = $armario = $tipo = $portaria = $qtd_garagem = NULL;
		$qtd_quartos = $qtd_salas = $qtd_suites = $valor_cond = $area_ = NULL;
		
		
		$andar = filtraEntrada($_POST["andar"]);
		$armario = filtraEntrada($_POST["armario"]);
		$tipo = filtraEntrada($_POST["tipo"]);
		$portaria = filtraEntrada($_POST["portaria"]);
		$qtd_garagem = filtraEntrada($_POST["qtd_garagem"]);
		$qtd_quartos = filtraEntrada($_POST["qtd_quartos"]);
        $qtd_salas = filtraEntrada($_POST["qtd_salas"]);
        $qtd_suites = filtraEntrada($_POST["qtd_suites"]);
        $valor_cond = filtraEntrada($_POST["valor_cond"]);
        $area_ = filtraEntrada($_POST["area"]);
		
		try{
			

			$sql = "
				INSERT INTO imovel(tipo, qtd_quartos, qtd_suites, qtd_salas, qtd_garagem, armario, area_ , andar, valor_cond, portaria)
				values (?, ? , ? , ? , ? , ? , ? , ? , ?, ?);
			";


			$stmt = $conn->prepare($sql);
			$stmt->bind_param("iiiiiiiiii", $tipo, $qtd_quartos, $qtd_suites, $qtd_salas, $qtd_garagem, $armario, $area_ , $andar, $valor_cond, $portaria);
        
			if (! $stmt->execute())
				throw new Exception("Erro ao inserir o imovel: " . $conn->error);

    
			$formProcSucesso = true;
			echo "<script>
					alert('Cadastro realizado');
					window.location.replace('../cadastroImoveis.php');
				</script>"; 
			} catch (Exception $e){
				$conn->rollback();echo"<script>
					alert('Cadastro não realizado, tente novamente');
					window.location.replace('../cadastroImoveis.php');
				</script>"; 
			}
	}
	?>