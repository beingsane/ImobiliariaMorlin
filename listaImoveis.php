<?php
    session_start();
    include("php/conexaoMySQL.php");

    function filtraEntrada($dado){
		$dado = trim($dado);
		$dado = stripslashes($dado);
		$dado = htmlspecialchars($dado);
		return $dado;
    }	
    
    

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

		
	function getImovel($conn, $opt){
		$listaImovel = '';
	    $listaImovel = array();
		
		$sqlf = "
            SELECT tipo, qtd_quartos, qtd_suites, qtd_salas, qtd_garagem, armario, area_, andar, valor_cond, portaria,
            categoria, endereco, cidade, bairro, estado, Id_cliente, imagens
            FROM imovel WHERE categoria = '$opt';
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
    
    
	
	if($_SERVER["REQUEST_METHOD"] == 'POST'){
        
        $msgErro = '';
    
	    $opt = $bairro = $min = $max = $key = "";

        $opt = filtraEntrada($_POST["optradio"]);
		$bairro = filtraEntrada($_POST["bairro"]);
		$min = filtraEntrada($_POST["min"]);
        $max = filtraEntrada($_POST["max"]);
        $key = filtraEntrada($_POST["key"]);

        try{
            $listaImovel = getImovel($conn, $opt); 
                        
        }catch (Exception $e){
            $msgErro = $e->getMessage();
        }
    }
	
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/layout.css" rel="stylesheet" type="text/css">
    <link href="css/menu.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <title>Imobiliária Morlin</title>

    <script>
        $(function () {
            $('.imgBtn').on('click', function () {
                $('.imagepreview').attr('src', $(this).find('img').attr('src'));
                $('#imagemodal').modal('show');
            });
        });
    </script>

</head>

<body>
<?php //include "php/navbar.php";?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 central">
                    <div class="row">
                        <?php
				                if($listaImovel != ""){
					                foreach ($listaImovel as $imovel){       
						                echo "
                                        <div class='table-responsive col-sm-4'>
                                        <table class='table'>
                                            <tr>
                                                <th>Preço:</th>
                                                <td>$imovel->valor_cond</td>
                                            </tr>
                                            <tr>
                                                <th>Número de Quartos:</th>
                                                <td>$imovel->qtd_quartos</td>
                                            </tr>
                                            <tr>
                                                <th>Área construida:</th>
                                                <td>$imovel->area_</td>
                                            </tr>
                                        </table>
                                        <button type='button' class='btn1' data-toggle='modal' data-target='#modalDetalhes'>Mostrar Detalhes</button>
            
                                        <div class='modal fade' id='modalDetalhes' role='dialog'>
                                            <div class='modal-dialog modal-lg'>
                                                <div class='col-sm-12'>
                                                    <div class='modal-content'>
                                                        <div class='modal-header'>
                                                            <div class='table-responsive col-sm-6'>
                                                                <table class='table'>
                                                                    <tr>
                                                                        <th>Preço:</th>
                                                                        <td>1000,00</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Número de Quartos:</th>
                                                                        <td>2</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Área construida:</th>
                                                                        <td>40m</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Suites:</th>
                                                                        <td>1</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Salas:</th>
                                                                        <td>1</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Vaga na Garagem:</th>
                                                                        <td>2</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Armário Imbutido:</th>
                                                                        <td>Sim</td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                            <div class='table-responsive col-sm-6'>
                                                                <table class='table'>
                                                                    <tr>
                                                                        <td>
                                                                            <a href='#' class='imgBtn'>
                                                                                <img src='imagens/01_01.jpg'>
                                                                            </a>
                                                                        </td>
                                                                        <td>
                                                                            <a href='#' class='imgBtn'>
                                                                                <img src='imagens/01_02.jpg'>
                                                                            </a>
                                                                        </td>
                                                                        <td>
                                                                            <a href='#' class='imgBtn'>
                                                                                <img src='imagens/01_03.jpg'>
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <a href='#' class='imgBtn'>
                                                                                <img src='imagens/01_04.jpg'>
                                                                            </a>
                                                                        </td>
                                                                        <td>
                                                                            <a href='#' class='imgBtn'>
                                                                                <img src='imagens/01_05.jpg'>
                                                                            </a>
                                                                        </td>
                                                                        <td>
                                                                            <a href='#' class='imgBtn'>
                                                                                <img src='imagens/01_06.jpg'>
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </div>
            
                                                        </div>
                                                    </div>
            
                                                </div>
                                            </div>
                                        </div>
            
                                        <button type='button' class='btn1' data-toggle='modal' data-target='#modalInteresse'>Tenho Interesse</button>
                                        
                                            <div class='modal fade' id='modalInteresse' role='dialog'>
                                                <div class='modal-dialog'>
                                                    <div class='col-sm-12'>
                                                    <form name='formInteresse' class='form-horizontal' action='php/mostrarInteresse.php' method='POST'>
                                                        <div class='modal-content'>
                                                            <div class='modal-header'>
                                                                <h4 class='modal-title'>Digite os dados para demonstrar interesse</h4>
                                                                <button type='button' class='close' data-dismiss='modal'>&times;</button>
                                                            </div>
            
                                                            <div class='modal-body'>
                                                                <div class='form-group'>
                                                                    <label class='control-label col-sm-6' for='nome'>Nome Completo:</label>
                                                                    <div class='col-sm-6'>
                                                                        <input type='text' class='form-control' name='nome' placeholder='Digite o nome' required>
                                                                    </div>
                                                                </div>
            
                                                                <div class='form-group'>
                                                                    <label class='control-label col-sm-3' for='email'>E-mail:</label>
                                                                    <div class='col-sm-6'>
                                                                        <input type='text' class='form-control' name='email' placeholder='Digite o email' required>
                                                                    </div>
                                                                </div>
            
                                                                <div class='form-group'>
                                                                    <label class='control-label col-sm-2' for='telefone'>Telefone:</label>
                                                                    <div class='col-sm-6'>
                                                                        <input type='text' class='form-control' name='telefone' placeholder='Digite o telefone' required>
                                                                    </div>
                                                                </div>
            
                                                                <div class='form-group'>
                                                                    <label class='control-label col-sm-2' for='descricao'>Descrição:</label>
                                                                    <div class='col-sm-10'>
                                                                        <input type='text' name='descricao' placeholder='Digite a Descrição' required>
                                                                    </div>
                                                                </div>
                                                            </div>
            
                                                            <div class='modal-footer'>
                                                                <button type='submit' class='btn btn-primary'>Enviar</button>
                                                                <button type='button' class='btn btn-default' data-dismiss='modal'>Fechar</button>
                                                            </div>
            
                                                        </div>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                    </div>
            
            
                                    <div class='modal fade' id='imagemodal' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
                                        <div class='modal-dialog'>
                                            <div class='modal-content'>
                                                <div class='modal-body'>
                                                    <button type='button' class='close' data-dismiss='modal'>
                                                        <span aria-hidden='true'>&times;</span>
                                                        <span class='sr-only'>Close</span>
                                                    </button>
                                                    <img src='' class='imagepreview' style='width: 100%;'>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <table>
                                    <tr>
                                        <td><img src='imagens/01_01.jpg' id='img1'></td>
                                        <td><img src='imagens/01_02.jpg' id='img1'></td>
                                        <td><img src='imagens/01_03.jpg' id='img1'></td>
                                    </tr>
                                    </table>
						                ";
					                }
				                }	
				        ?>
                    </div>  
                
            
            
            </div>
        </div>
    </div>

<?php include "php/footer.php";?>
</body>
</html>