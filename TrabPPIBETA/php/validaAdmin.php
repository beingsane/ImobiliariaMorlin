<?php
	include("conexaoMySQL.php");
	$conn = conectaAoMySQL();

	function filtraEntradaV($dado){
		$dado = trim($dado);
		$dado = stripslashes($dado);
		$dado = htmlspecialchars($dado);
		return $dado;
	};	
	
	if($_SERVER["REQUEST_METHOD"] == 'POST'){
		$login = $senha = $aux = "";
		
		$login = filtraEntradaV($_POST["login"]);
		$aux = filtraEntradaV($_POST["senha"]);
		$senha = ($aux);
		
		$sql = "SELECT Login FROM usuario where Login = '$login' and Senha = '$senha' ";
		$resultado = $conn->query($sql);
		
		if($resultado->num_rows <= 0){
			echo "<script>
					alert('Dados incorretos, tente novamente!');
					window.location.replace('../index.php');
				</script>"; 
		}
		else{
			session_start();
			$_SESSION["login"] = $login;
			echo "<script>
                    alert('Bem vindo!');
					window.location.replace('../cadastroFuncionarios.php');
				</script>"; 
		}	
	}
	
		
	?>