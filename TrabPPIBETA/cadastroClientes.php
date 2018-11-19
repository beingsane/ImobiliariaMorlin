<?php
    session_start();
    require "php/cadcliente.php";
?>

<?php include "php/validarsessao.php";?>

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
                <form name="formCadastroCliente" class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                    <div class="row">
                        <label class="col-sm-2" for="name">Nome:</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="name" placeholder="Digite o nome">
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2" for="phonenumber">Telefone:</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="phonenumber" placeholder="Digite o telefone">
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2" for="cpf">CPF:</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="cpf" placeholder="Digite o CPF">
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2" for="address">Endereço:</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="address" placeholder="Digite o Endereço">
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2" for="email">E-mail:</label>
                        <div class="col-sm-6">
                            <input type="email" class="form-control" id="email" placeholder="Digite o E-mail">
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2" for="sexo">Sexo:</label>
                        <label class="radio-inline">
                            <input type="radio" name="optradio">Masculino</label>
                        <label class="radio-inline">
                            <input type="radio" name="optradio">Feminino</label>
                    </div>
                    <div class="row">
                        <label class="col-sm-2" for="civil">Estado Civil:</label>
                        <select>
                            <option>Opção</option>
                            <option value="solteiro">Solteiro</option>
                            <option value="casado">Casado</option>
                            <option value="viuvo">Viúvo</option>
                            <option value="viuvo">Divorciado</option>
                        </select>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <button type="button" class="btn btn-info btn-lg">Armazenar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php include "php/footer.php";?>
</body>
</html>