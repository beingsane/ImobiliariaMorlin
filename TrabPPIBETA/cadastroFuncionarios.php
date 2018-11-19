<?php
    session_start();
    include('php/validarsessao.php');
    require "php/cadfunc.php";
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
</head>

<body>
<?php include "php/navbar.php";?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-8 central">
            <form name='formCadastroFuncionarios' class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                    <div class="row">
                        <label class="col-sm-2" for="nome">Nome:</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="nome" placeholder="Digite o nome">
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2" for="telefone">Telefone:</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="telefone" placeholder="Digite o telefone">
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2" for="cpf">CPF:</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="cpf" placeholder="Digite o cpf">
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2" for="address">Endereço:</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="address" placeholder="Digite o Endereço">
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2" for="celular">Celular:</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="celular" placeholder="Digite o Telefone para contato">
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2" for="email">E-mail:</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="email" placeholder="Digite o Celular">
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2" for="dataingresso">Data de Ingresso:</label>
                        <div class="col-sm-6">
                            <input type="date" class="form-control" id="dataingresso" placeholder="Digite a data">
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2" for="cargo">Cargo:</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="cargo" placeholder="Digite o Cargo">
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2" for="salario">Salario:</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="salario" placeholder="Digite o Salario">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <button type="submit" class="btn btn-info btn-lg">Armazenar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <?php 
		if ($_SERVER["REQUEST_METHOD"] == "POST") {  
			if ($msgErro == "")
				echo "<h3 class='text-success'>Dados armazenados com sucesso!</h3>";
		else
			echo "<h3 class='text-danger'>Cadastro não realizado: $msgErro</h3>";
		}
	    ?>

    </div>

<?php include "php/footer.php";?>
</body>
</html>