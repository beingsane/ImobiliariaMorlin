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
		$qtd_salas = $qtd_garagem = $qtd_quartos = $qtd_suites = $valor_cond = "";
		$armario = $armario = $id = $portaria = $area "";
		
		
		$andar = filtraEntrada($_POST["andar"]);
		$armario = filtraEntrada($_POST["armario"]);
		$id = filtraEntrada($_POST["id"]);
		$portaria = filtraEntrada($_POST["portaria"]);
		$qtd_garagem = filtraEntrada($_POST["qtd_garagem"]);
		$qtd_quartos = filtraEntrada($_POST["qtd_quartos"]);
        $qtd_salas = filtraEntrada($_POST["qtd_salas"]);
        $qtd_suites = filtraEntrada($_POST["qtd_suites"]);
        $valor_cond = filtraEntrada($_POST["valor_cond"]);
        $area = filtraEntrada($_POST["area"]);
		
		try{
			
			$conn->begin_transaction();
			
			$sql = "
				INSERT INTO funcionario(andar, id, qtd_quartos, qtd_garagem, armario, qtd_suites, qtd_salas, portaria, valor_cond, area)
				values (?, ? , ? , ? , ? , ? , ? , ? , ?, ?);
			";


			$stmt = $conn->prepare($sql);

			$stmt->bind_param("iiiiiiiiii", $andar , $qtd_garagem , $qtd_salas, $qtd_suites , $qtd_quartos , $id, $armario, $valor_cond, $portaria, $area);
        
			if (! $stmt->execute())
				throw new Exception("Erro ao inserir o imovel: " . $conn->error);
    
			
			$conn->commit();
    
			$formProcSucesso = true;
			echo "<script>
					alert('Cadastro realizado');
					window.location.replace('cadastroImoveis.php');
				</script>"; 
			} catch (Exception $e){
				$conn->rollback();echo"<script>
					alert('Cadastro não realizado, tente novamente');
					window.location.replace('cadastroImoveis.php');
				</script>"; 
			}
	}
	?>