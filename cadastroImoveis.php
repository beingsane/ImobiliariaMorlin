<?php
    include('php/validarsessao.php');
    require "php/listaClientes.php";
    require "php/cadimovel.php";
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
        function hiddenForm(option) {
            if (option == 1) {
                document.getElementById("formApartYes").fade = "hidden";
            }
            else if (option == 2) {
                document.getElementById("formApartYes").style.visibility = "visible";
            }
        };

    </script>

    <script>/*
        $('#formApartYes').click(function(){
            if (option == 1){

            }
            if($('#formApartYes').is(':checked')) {
                $('#formApartYes').fadeIn(700);
            } else {
                $('#formApartYes').fadeOut(700);   
            }
        });*/
    </script>

    

</head>


<body>
<?php include "php/navbar.php";?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-8 central">
                <form name="formCadastroImovel" class="form-horizontal" action="php/cadimovel.php" method="POST" enctype="multipart/form-data">

                    <div class="row">
                        <label class="col-sm-3" for="categoria">Categoria:</label>
                        <label class="radio-inline"><input type="radio" name="categoria" value="1">Venda</label>
                        <label class="radio-inline"><input type="radio" name="categoria" value="2">Aluguel</label>
                    </div>

                    <div class="row">
                        <label class="col-sm-3" for="tipo">Tipo de Imóvel:</label>
                        <label class="radio-inline"><input type="radio" name="tipo" value="1" onclick="hiddenForm(1);">Casa</label>
                        <label class="radio-inline"><input type="radio" name="tipo" value="2" onclick="hiddenForm(2);">Apartamento</label>
                    </div>
                    
                    <div class="row">
                        <label class=" col-sm-3" for="qtd_quartos">Quantidade de quantos:</label>
                        <div class="col-sm-3">
                            <input type="number" class="form-control" name="qtd_quartos" placeholder="número de quartos">
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-3" for="qtd_suites">Quantidade de suites:</label>
                        <div class="col-sm-3">
                            <input type="number" class="form-control" name="qtd_suites" placeholder="número de suites">
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-3" for="qtd_salas">Quantidade de salas:</label>
                        <div class="col-sm-3">
                            <input type="number" class="form-control" name="qtd_salas" placeholder="número de salas">
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-3" for="qtd_garagem">Vagas na garagem:</label>
                        <div class="col-sm-3">
                            <input type="number" class="form-control" name="qtd_garagem" placeholder="vagas na garagem">
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-3" for="area_">Área:</label>
                        <div class="col-sm-3">
                            <input type="number" class="form-control" name="area_" placeholder="área">
                        </div>
                    </div>
                    <div class="row">
                        <label class=" col-sm-3" for="armario">Possui armário imbutido:</label>
                        <div class="col-sm-3">
                            <label class="radio-inline">
                                <input type="radio" name="armario" value='1'>Sim</label>
                            <label class="radio-inline">
                                <input type="radio" name="armario" value='2'>Não</label>
                        </div>
                    </div>

                    <div class="row">
                        <label class="col-sm-2" name="proprietario">Proprietário:</label>
                        <select class="col-sm-4" name="proprietario">
                            <option>Selecione</option>
                            <?php
				                if($listaCliente != ""){
					                foreach ($listaCliente as $cliente){       
						                echo "
							                <option value='$cliente->Id'>$cliente->nome</option>
						                ";
					                }
				                }	
				            ?>
                        </select>
                    </div>

                    <div class="row">
                        <label class="col-sm-2" for="endereco">Endereço:</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="endereco" id="endereco" placeholder="Digite o Endereço">
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2" for="bairro">Bairro:</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="bairro" id="bairro" placeholder="Digite o Bairro">
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2" for="cidade">Cidade:</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="cidade" id="cidade" placeholder="Digite a Cidade">
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2" for="estado">Estado:</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="estado" id="estado" placeholder="Digite o Estado">
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2" for="imagensBanco">Imagens:</label>
                        <div class="col-sm-6">
                            <input type="file" name="files[]" multiple="multiple" placeholder="Coloque as imagens aqui"/>
                        </div>
                    </div>


                    <div id="formApartYes" name="formApartYes" style="visibility: hidden;">
                        <div class="row">
                            <label class="col-sm-3" for="andar">Andar:</label>
                            <div class="col-sm-3">
                                <input type="number" class="form-control" name="andar" placeholder="andar">
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-3" for="valor_cond">Valor do condomínio:</label>
                            <div class="col-sm-3">
                                <input type="number" class="form-control" name="valor_cond" placeholder="valor">
                            </div>
                        </div>
                        <div class="row">
                            <label class=" col-sm-3" for="portaria">Possui portaria 24 horas:</label>
                            <div class="col-sm-3">
                                <label class="radio-inline">
                                    <input type="radio" name="portaria" value='1'>Sim</label>
                                <label class="radio-inline">
                                    <input type="radio" name="portaria" value='2'>Não</label>
                            </div>
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
    </div>
    
<?php include "php/footer.php";?>
</body>
</html>