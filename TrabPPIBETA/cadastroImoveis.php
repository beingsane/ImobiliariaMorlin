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

    <script>
        function hiddenForm(option) {
            console.log("teste");
            if (option == 1) {
                document.getElementById("formApart").style.visibility = "hidden";
            }
            else if (option == 2) {
                document.getElementById("formApart").style.visibility = "visible";
            }
        };
    </script>

</head>

<body>
<?php include "php/navbar.php";?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-8 central">
                <form class="form-horizontal" action="/action_page.php">

                    <label class="radio-inline">
                        <input type="radio" name="optradio" value="1" onclick="hiddenForm(1);">Casa</label>
                    <label class="radio-inline">
                        <input type="radio" name="optradio" value="2" onclick="hiddenForm(2);">Apartamento</label>

                    <div class="row">
                        <label class=" col-sm-3" for="name">Quantidade de quantos:</label>
                        <div class="col-sm-3">
                            <input type="number" class="form-control" id="name" placeholder="número de quartos">
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-3" for="name">Quantidade de suites:</label>
                        <div class="col-sm-3">
                            <input type="number" class="form-control" id="name" placeholder="número de suites">
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-3" for="name">Quantidade de salas:</label>
                        <div class="col-sm-3">
                            <input type="number" class="form-control" id="name" placeholder="número de salas">
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-3" for="name">Vagas na garagem:</label>
                        <div class="col-sm-3">
                            <input type="number" class="form-control" id="name" placeholder="vagas na garagem">
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-3" for="name">Área:</label>
                        <div class="col-sm-3">
                            <input type="number" class="form-control" id="name" placeholder="área">
                        </div>
                    </div>
                    <div class="row">
                        <label class=" col-sm-3" for="name">Possui armário imbutido:</label>
                        <div class="col-sm-3">
                            <label class="radio-inline">
                                <input type="radio" name="optradio">Sim</label>
                            <label class="radio-inline">
                                <input type="radio" name="optradio">Não</label>
                        </div>
                    </div>
                    <div id="formApart" style="visibility: hidden;">
                        <div class="row">
                            <label class="col-sm-3" for="name">Andar:</label>
                            <div class="col-sm-3">
                                <input type="number" class="form-control" id="name" placeholder="andar">
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-3" for="name">Valor do condomínio:</label>
                            <div class="col-sm-3">
                                <input type="number" class="form-control" id="name" placeholder="valor">
                            </div>
                        </div>
                        <div class="row">
                            <label class=" col-sm-3" for="name">Possui portaria 24 horas:</label>
                            <div class="col-sm-3">
                                <label class="radio-inline">
                                    <input type="radio" name="optradio">Sim</label>
                                <label class="radio-inline">
                                    <input type="radio" name="optradio">Não</label>
                            </div>
                        </div>
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