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
		$nome = $sexo = $cpf = $salario = $celular = "";
		
		
		$nome = filtraEntrada($_POST["nome"]);
		$sexo = filtraEntrada($_POST["sexo"]);
		$cpf = filtraEntrada($_POST["cpf"]);
		$salario = filtraEntrada($_POST["salario"]);
		$endereco = filtraEntrada($_POST["endereco"]);
		$telefone = filtraEntrada($_POST["telefone"]);
		$email = filtraEntrada($_POST["email"]);
        $cargo = filtraEntrada($_POST["cargo"]);
        $celular = filtraEntrada($_POST["celular"]);
        $dataingresso = filtraEntrada($_POST["dataingresso"]);
		
		try{
			
			$conn->begin_transaction();
			
			$sql = "
				INSERT INTO funcionario(Id, nome, cpf, email, endereco, telefone, sexo, celular, cargo, salario, dataingresso)
				values (?, NULL , ? , ? , NULL , NULL , NULL , ? , NULL , ?);
			";


			$stmt = $conn->prepare($sql);

			$stmt->bind_param("sisisisisi", $nome , $telefone , $cargo, $celular , $email , $cpf, $endereco, $salario, $dataingresso, $sexo);
        
			if (! $stmt->execute())
				throw new Exception("Erro ao inserir o funcionario: " . $conn->error);
    
			
			$conn->commit();
    
			$formProcSucesso = true;
			echo "<script>
					alert('Cadastro realizado');
					window.location.replace('cadastroFuncionarios.php');
				</script>"; 
			} catch (Exception $e){
				$conn->rollback();echo"<script>
					alert('Cadastro não realizado, tente novamente');
					window.location.replace('cadastroFuncionarios.php');
				</script>"; 
			}
	}
	?>