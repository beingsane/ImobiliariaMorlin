<?php
    session_start();
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

            <label class="control-label col-sm-1" for="civil">Opção:</label>
            <select>
                <option>Opção</option>
                <option value="funcionario">Funcionário</option>
                <option value="cliente">Cliente</option>
                <option value="imovel">Imóvel</option>
                <option value="interesse">Interesse</option>
            </select>


            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th>Nome:</th>
                        <th>Endereço:</th>
                        <th>CPF:</th>
                        <th>Telefone:</th>
                    </tr>
                    <tr>
                        <td>Bruno</td>
                        <td>Rua Tal</td>
                        <td>CPF Tal</td>
                        <td>Telefone Tal</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

<?php include "php/footer.php";?>
</body>
</html>