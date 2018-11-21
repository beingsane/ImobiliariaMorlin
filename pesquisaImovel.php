<?php
    session_start();
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
            <div class="col-sm-12 estilo">
                <form class="form-horizontal" action="/action_page.php">
                    <div class="row">
                        <label class="radio-inline">
                            <input type="radio" name="optradio" value="1">Aquisição</label>
                        <label class="radio-inline">
                            <input type="radio" name="optradio" value="2">Locação</label>
                    </div>

                    <div class="row">
                        <label class="col-sm-2">Escolha o Bairro:</label>
                        <select class="col-sm-1">
                            <option>Opção</option>
                            <option value="">Bairro1</option>
                            <option value="">Bairro2</option>
                            <option value="">Bairro3</option>
                            <option value="">Bairro4</option>
                        </select>
                    </div>

                    <div class="row">
                        <label class="control-label col-sm-4" for="name">Digite o valor mínimo e máximo para a busca do imóvel:</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="name" placeholder="mínimo">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="name" placeholder="máximo">
                        </div>
                    </div>

                    <div class="row">
                        <label class="control-label col-sm-4" for="name">Digite uma palavra chave para pesquisa do Imovel (churrasqueira, piscina, etc):</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="name" placeholder="Palavra-chave">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <button type="button" class="btn btn-info btn-lg" onClick="window.open('listaImoveis.html', '_self')";>Pesquisar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php include "php/footer.php";?>
</body>
</html>