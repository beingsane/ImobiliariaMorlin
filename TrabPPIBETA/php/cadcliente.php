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
		$cep = $telefone = $email = $endereco = "";
		$nome = $sexo = $cpf = $cep = "";
		
		
		$nome = filtraEntrada($_POST["nome"]);
		$sexo = filtraEntrada($_POST["sexo"]);
		$cpf = filtraEntrada($_POST["cpf"]);
		$cep = filtraEntrada($_POST["cep"]);
		$telefone = filtraEntrada($_POST["telefone"]);
		$email = filtraEntrada($_POST["email"]);
        $estadocivil = filtraEntrada($_POST["estadocivil"]);
        $endereco = filtraEntrada($_POST["endereco"]);
		
		try{
			
			$conn->begin_transaction();
			
			$sql = "
				INSERT INTO cliente(nome, cep, cpf, email, estadocivil, endereco, telefone, sexo)
				values (?, NULL , NULL , ? , NULL , ? , NULL , NULL);
			";
			
			$stmt = $conn->prepare($sql);

			$stmt->bind_param("ssiiisis", $nome , $telefone , $sexo , $cep , $estadocivil , $email , $cpf, $endereco);
        
			if (! $stmt->execute())
				throw new Exception("Erro ao inserir o cliente: " . $conn->error);
    
			
			$conn->commit();
    
			$formProcSucesso = true;
			echo "<script>
					alert('Cadastro realizado');
					window.location.replace('cadastroClientes.php');
				</script>"; 
			} catch (Exception $e){
				$conn->rollback();echo"<script>
					alert('Cadastro não realizado, tente novamente');
					window.location.replace('cadastroClientes.php');
				</script>"; 
			}
	}
	?>