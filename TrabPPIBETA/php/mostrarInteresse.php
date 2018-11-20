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
		$nome = $email = $telefone = $descricao = "";
		
		
		$nome = filtraEntrada($_POST["nome"]);
		$sexo = filtraEntrada($_POST["email"]);
		$cpf = filtraEntrada($_POST["telefone"]);
		$cep = filtraEntrada($_POST["descricao"]);
		

		try{
			
			$sql = "
				INSERT INTO cliente(nome, email, telefone, descricao)
				values (?, ? , ? , ?);
			";
			
			$stmt = $conn->prepare($sql);
			$stmt->bind_param("ssss", $nome, $email, $telefone, $descricao);
        
			if (! $stmt->execute())
				throw new Exception("Erro ao enviar interesse: " . $conn->error);
    
			$formProcSucesso = true;
			echo "<script>
					alert('Interesse enviado com sucesso');
					window.location.replace('../listaImoveis.php');
				</script>"; 
			} catch (Exception $e){
				$conn->rollback();echo"<script>
					alert('Interesse não realizado, tente novamente');
					window.location.replace('../listaImoveis.php');
				</script>"; 
			}
	}
	?>