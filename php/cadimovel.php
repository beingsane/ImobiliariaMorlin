<?php
	include("conexaoMySQL.php");
	
	function getFiles(){
		$listaFiles = '';
		$listaFiles = array();

		foreach($_FILES["files"]["tmp_name"] as $key=>$tmp_name){
			$temp = $_FILES["files"]["tmp_name"][$key];
			$name = $_FILES["files"]["name"][$key];
			
			if(empty($temp))
			{
				break;
			}
			$listaFiles[] = $name; 
			move_uploaded_file($temp,"../Files/".$name);
		}
		return $jsonFile = json_encode($listaFiles);
	}
		
	function filtraEntrada($dado){
		$dado = trim($dado);
		$dado = stripslashes($dado);
		$dado = htmlspecialchars($dado);
		return $dado;
	}	
	
	if($_SERVER["REQUEST_METHOD"] == 'POST'){

		$files = getFiles();

		$msgErro = '';
		$andar = $armario = $tipo = $portaria = $qtd_garagem = $Id_cliente = NULL;
		$qtd_quartos = $qtd_salas = $qtd_suites = $valor_cond = $area_ = NULL;
		
		$Id_cliente = filtraEntrada($_POST["proprietario"]);
		$categoria = filtraEntrada($_POST["categoria"]);
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
		$endereco = filtraEntrada($_POST["endereco"]);
		$cidade = filtraEntrada($_POST["cidade"]);
		$bairro = filtraEntrada($_POST["bairro"]);
		$estado = filtraEntrada($_POST["estado"]);
		
		try{
			

			$sql = "
				INSERT INTO imovel(tipo, qtd_quartos, qtd_suites, qtd_salas, qtd_garagem, armario, area_ , andar, valor_cond, portaria, categoria, endereco, cidade, estado, bairro, Id_cliente, imagens)
				values (?, ?, ? , ? , ? , ? , ? , ? , ? , ?, ?, ?, ? , ? , ?, ?, ?);
			";


			$stmt = $conn->prepare($sql);
			$stmt->bind_param("iiiiiiiiiiissssss", $tipo, $qtd_quartos, $qtd_suites, $qtd_salas, $qtd_garagem, $armario, $area_ , $andar, $valor_cond, $portaria, $categoria, $endereco, $cidade, $estado, $bairro, $Id_cliente, $files);
        
			if (! $stmt->execute())
				throw new Exception("Erro ao inserir o imovel: " . $conn->error);

    
			$formProcSucesso = true;
			echo "<script>
					alert('Cadastro realizado');
					window.location.replace('../cadastroImoveis.php');
				</script>"; 
			} catch (Exception $e){
				echo"<script>
					alert('Cadastro não realizado, tente novamente');
					window.location.replace('../cadastroImoveis.php');
				</script>"; 
			}
	}
	?>