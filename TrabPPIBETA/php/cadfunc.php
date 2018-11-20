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
		$cargo = $telefone = $email = $endereco = $dataingresso = "";
		$nome = $sexo = $cpf = $salario = "";
		
		
		$nome = filtraEntrada($_POST["nome"]);
		$cpf = filtraEntrada($_POST["cpf"]);
		$salario = filtraEntrada($_POST["salario"]);
		$telefone = filtraEntrada($_POST["telefone"]);
		$email = filtraEntrada($_POST["email"]);
        $cargo = filtraEntrada($_POST["cargo"]);
		$celular = filtraEntrada($_POST["celular"]);
		$endereco = filtraEntrada($_POST["endereco"]);
		$dataingresso = filtraEntrada($_POST["dataingresso"]);
		
		
		try{
			
			$sql = "
				INSERT INTO funcionario(nome, cpf, email, endereco, telefone, celular, cargo, salario, dataingresso)
				values (?, ? , ? , ? , ? , ? , ? , ? , ?);
			";

			$stmt = $conn->prepare($sql);
			$stmt->bind_param("sisssssss", $nome , $cpf , $email, $endereco , $telefone , $celular, $cargo, $salario, $dataingresso);
			
			if (! $stmt->execute())
				throw new Exception("Erro ao inserir o funcionario: " . $conn->error);
    
			
			$formProcSucesso = true;
				echo "<script>
					alert('Cadastro realizado');
					window.location.replace('../cadastroFuncionarios.php');
				</script>"; 
			} catch (Exception $e){
				echo"<script>
					alert('Cadastro não realizado, tente novamente');
					window.location.replace('../cadastroFuncionarios.php');
				</script>"; 
			}
	}
?>