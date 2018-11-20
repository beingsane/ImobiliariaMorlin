<?php
    include('php/validarsessao.php');
    $paginaAtiva = "cadastroCliente";
    require "php/cadcliente.php";
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
                <form name="formCadastroCliente" class="form-horizontal" action="php/cadcliente.php" method="POST">
                    <div class="row">
                        <label class="col-sm-2" for="nome">Nome:</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="nome" placeholder="Digite o nome">
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2" for="telefone">Telefone:</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="telefone" placeholder="Digite o telefone">
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2" for="cpf">CPF:</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="cpf" placeholder="Digite o CPF">
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2" for="endereco">Endereço:</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="endereco" placeholder="Digite o Endereço">
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2" for="email">E-mail:</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="email" placeholder="Digite o E-mail">
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2" for="cep">CEP:</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="cep" placeholder="Digite o CEP">
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2" for="sexo">Sexo:</label>
                        <label class="radio-inline"><input type="radio" name='sexo' value='1'>Masculino</label>
                        <label class="radio-inline"><input type="radio" name='sexo' value='2'>Feminino</label>
                    </div>
                    <div class="row">
                        <label class="col-sm-2" name="estadocivil">Estado Civil:</label>
                        <select class="col-sm-4" name="estadocivil">
                            <option value="solteiro">Solteiro</option>
                            <option value="casado">Casado</option>
                            <option value="viuvo">Viúvo</option>
                            <option value="divorciado">Divorciado</option>
                        </select>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <button type="submit" class="btn btn-info btn-lg">Armazenar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php include "php/footer.php";?>
</body>
</html>