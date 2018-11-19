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
<?php include "php/navbar.php";?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 central">
                <form class="form-horizontal" action="/action_page.php">
                    <div class="row">
                        <div class="table-responsive col-sm-4">
                            <table class="table">
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
                            </table>
                            <button type="button" class="btn1" data-toggle="modal" data-target="#modalDetalhes">Mostrar Detalhes</button>

                            <div class="modal fade" id="modalDetalhes" role="dialog">
                                <div class="modal-dialog modal-lg">
                                    <div class="col-sm-12">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <div class="table-responsive col-sm-6">
                                                    <table class="table">
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
                                                <div class="table-responsive col-sm-6">
                                                    <table class="table">
                                                        <tr>
                                                            <td>
                                                                <a href="#" class="imgBtn">
                                                                    <img src="imagens/01_01.jpg">
                                                                </a>
                                                            </td>
                                                            <td>
                                                                <a href="#" class="imgBtn">
                                                                    <img src="imagens/01_02.jpg">
                                                                </a>
                                                            </td>
                                                            <td>
                                                                <a href="#" class="imgBtn">
                                                                    <img src="imagens/01_03.jpg">
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="#" class="imgBtn">
                                                                    <img src="imagens/01_04.jpg">
                                                                </a>
                                                            </td>
                                                            <td>
                                                                <a href="#" class="imgBtn">
                                                                    <img src="imagens/01_05.jpg">
                                                                </a>
                                                            </td>
                                                            <td>
                                                                <a href="#" class="imgBtn">
                                                                    <img src="imagens/01_06.jpg">
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

                            <button type="button" class="btn1" data-toggle="modal" data-target="#modalInteresse">Tenho Interesse</button>
                            <div class="modal fade" id="modalInteresse" role="dialog">
                                <div class="modal-dialog">
                                    <div class="col-sm-12">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Digite os dados para demonstrar interesse</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>

                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label class="control-label col-sm-6" for="nome">Nome Completo:</label>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite o nome" required>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="control-label col-sm-3" for="email">E-mail:</label>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" name="email" id="email" placeholder="Digite o email" required>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="control-label col-sm-2" for="tel">Telefone:</label>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" name="tel" id="tel" placeholder="Digite o telefone" required>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="control-label col-sm-2" for="tel">Descrição:</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="textbox" name="tel" id="tel" placeholder="Digite a Descrição" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Enviar</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <button type="button" class="close" data-dismiss="modal">
                                            <span aria-hidden="true">&times;</span>
                                            <span class="sr-only">Close</span>
                                        </button>
                                        <img src="" class="imagepreview" style="width: 100%;">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <table>
                        <tr>
                            <td><img src="imagens/01_01.jpg" id="img1"></td>
                            <td><img src="imagens/01_02.jpg" id="img1"></td>
                            <td><img src="imagens/01_03.jpg" id="img1"></td>
                        </tr>
                        </table>
                    </div>  
                </form>
            </div>
            <div class="col-sm-12 central">
                <form class="form-horizontal" action="/action_page.php">
                    <div class="row">
                        <div class="table-responsive col-sm-4">
                            <table class="table">
                                <tr>
                                    <th>Preço:</th>
                                    <td>2000,00</td>
                                </tr>
                                <tr>
                                    <th>Número de Quartos:</th>
                                    <td>3</td>
                                </tr>
                                <tr>
                                    <th>Área construida:</th>
                                    <td>100m²</td>
                                </tr>
                            </table>
                            <button type="button" class="btn1" data-toggle="modal" data-target="#modalDetalhes2">Mostrar Detalhes</button>

                            <div class="modal fade" id="modalDetalhes2" role="dialog">
                                <div class="modal-dialog modal-lg">
                                    <div class="col-sm-12">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <div class="table-responsive col-sm-6">
                                                    <table class="table">
                                                        <tr>
                                                            <th>Preço:</th>
                                                            <td>2000,00</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Número de Quartos:</th>
                                                            <td>3</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Área construida:</th>
                                                            <td>100m²</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Suites:</th>
                                                            <td>1</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Salas:</th>
                                                            <td>3</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Vaga na Garagem:</th>
                                                            <td>3</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Armário Imbutido:</th>
                                                            <td>Sim</td>
                                                        </tr>
                                                    </table>
                                                </div>
                                                <div class="table-responsive col-sm-6">
                                                    <table class="table">
                                                        <tr>
                                                            <td>
                                                                <a href="#" class="imgBtn">
                                                                    <img src="imagens/02_01.jpg">
                                                                </a>
                                                            </td>
                                                            <td>
                                                                <a href="#" class="imgBtn">
                                                                    <img src="imagens/02_02.jpg">
                                                                </a>
                                                            </td>
                                                            <td>
                                                                <a href="#" class="imgBtn">
                                                                    <img src="imagens/02_03.jpg">
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="#" class="imgBtn">
                                                                    <img src="imagens/02_04.jpg">
                                                                </a>
                                                            </td>
                                                            <td>
                                                                <a href="#" class="imgBtn">
                                                                    <img src="imagens/02_05.jpg">
                                                                </a>
                                                            </td>
                                                            <td>
                                                                <a href="#" class="imgBtn">
                                                                    <img src="imagens/02_06.jpg">
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

                            <button type="button" class="btn1" data-toggle="modal" data-target="#modalInteresse">Tenho Interesse</button>
                            <div class="modal fade" id="modalInteresse" role="dialog">
                                <div class="modal-dialog">
                                    <div class="col-sm-12">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Digite os dados para demonstrar interesse</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>

                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label class="control-label col-sm-6" for="nome">Nome Completo:</label>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite o nome" required>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="control-label col-sm-3" for="email">E-mail:</label>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" name="email" id="email" placeholder="Digite o email" required>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="control-label col-sm-2" for="tel">Telefone:</label>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" name="tel" id="tel" placeholder="Digite o telefone" required>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="control-label col-sm-2" for="tel">Descrição:</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="textbox" name="tel" id="tel" placeholder="Digite a Descrição" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Enviar</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="modal fade" id="imagemodal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <button type="button" class="close" data-dismiss="modal">
                                            <span aria-hidden="true">&times;</span>
                                            <span class="sr-only">Close</span>
                                        </button>
                                        <img src="" class="imagepreview" style="width: 100%;">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <table>
                        <tr>
                            <td><img src="imagens/02_01.jpg" id="img1"></td>
                            <td><img src="imagens/02_02.jpg" id="img1"></td>
                            <td><img src="imagens/02_03.jpg" id="img1"></td>
                        </tr>
                        </table>
                    </div>  
                </form>
            </div>
        </div>
    </div>

<?php include "php/footer.php";?>
</body>
</html>