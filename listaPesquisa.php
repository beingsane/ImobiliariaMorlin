<?php
    include("php/validarsessao.php");
    include("php/conexaoMySQL.php");
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

            <form action="">
                <select name="Option">
                    <option value="1">Funcionário</option>
                    <option value="2">Cliente</option>
                    <option value="3">Imóvel</option>
                    <option value="4">Interesse</option>
                </select>

                <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th>Nome:</th>
                        <th>CPF:</th>
                        <th>Email:</th>
                        <th>Endereço:</th>
                        <th>Telefone:</th>
                        <th>Celular:</th>
                        <th>Cargo:</th>
                        <th>Salário:</th>
                        <th>Data de Ingresso:</th>
                    </tr>

                <?php

                    $option = $_POST['Option'];

                    
                
                    function display($option)
                    {
                        //while ($row = $resultl->fetch_assoc()){
                            if ($option == 1){
                                $result_func = "SELECT nome, cpf, email, endereco, telefone, celular, cargo, salario, dataingresso FROM funcionario";
                                $resultado_funcionario = mysqli_query($conn, $result_func);
                                if(mysqli_num_rows($resultado_funcionario) > 0){

                                    while ($row_func = mysqli_fetch_assoc($resultado_funcionario)) {
                                        echo '<tr>';
                                        echo '<td>'. $row_func['nome'] .'</td>';
                                        echo '<td>'. $row_func['cpf'] .'</td>';
                                        echo '<td>'. $row_func['email'] .'</td>';
                                        echo '<td>'. $row_func['endereco'] .'</td>';
                                        echo '<td>'. $row_func['telefone'] .'</td>';
                                        echo '<td>'. $row_func['celular'] .'</td>';
                                        echo '<td>'. $row_func['cargo'] .'</td>';
                                        echo '<td>'. $row_func['salario'] .'</td>';
                                        echo '<td>'. $row_func['dataingresso'] .'</td>';
                                        echo '</tr>';
                                    }
                                }
                            }
                        }
                  //  }
                ?>
                </table>
                </div>
            
            <input type="submit" name="submit" onclick="return display(1);" value="go"/>
            
            </form>

            <label class="control-label col-sm-1" for="civil">Opção:</label>
            <select>
                <option>Opção</option>
                <option value="1">Funcionário</option>
                <option value="2">Cliente</option>
                <option value="3">Imóvel</option>
                <option value="4">Interesse</option>
            </select>

            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th>Nome:</th>
                        <th>CPF:</th>
                        <th>Email:</th>
                        <th>Endereço:</th>
                        <th>Telefone:</th>
                        <th>Celular:</th>
                        <th>Cargo:</th>
                        <th>Salário:</th>
                        <th>Data de Ingresso:</th>
                    </tr>
                    <?php
                    $result_func = "SELECT nome, cpf, email, endereco, telefone, celular, cargo, salario, dataingresso FROM funcionario";
                    $resultado_funcionario = mysqli_query($conn, $result_func);
                    if(mysqli_num_rows($resultado_funcionario) > 0){

                        while ($row_func = mysqli_fetch_assoc($resultado_funcionario)) {
                            echo '<tr>';
                            echo '<td>'. $row_func['nome'] .'</td>';
                            echo '<td>'. $row_func['cpf'] .'</td>';
                            echo '<td>'. $row_func['email'] .'</td>';
                            echo '<td>'. $row_func['endereco'] .'</td>';
                            echo '<td>'. $row_func['telefone'] .'</td>';
                            echo '<td>'. $row_func['celular'] .'</td>';
                            echo '<td>'. $row_func['cargo'] .'</td>';
                            echo '<td>'. $row_func['salario'] .'</td>';
                            echo '<td>'. $row_func['dataingresso'] .'</td>';
                            echo '</tr>';
                        }
                      }
                    ?>
                </table>
            </div>

            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th>Nome:</th>
                        <th>CEP:</th>
                        <th>CPF:</th>
                        <th>Email:</th>
                        <th>Estado Civil:</th>
                        <th>Endereço:</th>
                        <th>Telefone:</th>
                        <th>Sexo:</th>
                    </tr>
                    <?php
                    $result_cliente = "SELECT nome, cep, cpf, email, estadocivil, endereco, telefone, sexo FROM cliente";
                    $resultado_cliente = mysqli_query($conn, $result_cliente);
                    if(mysqli_num_rows($resultado_cliente) > 0){

                        while ($row_cliente = mysqli_fetch_assoc($resultado_cliente)) {
                            echo '<tr>';
                            echo '<td>'. $row_cliente['nome'] .'</td>';
                            echo '<td>'. $row_cliente['cep'] .'</td>';
                            echo '<td>'. $row_cliente['cpf'] .'</td>';
                            echo '<td>'. $row_cliente['email'] .'</td>';
                            echo '<td>'. $row_cliente['estadocivil'] .'</td>';
                            echo '<td>'. $row_cliente['endereco'] .'</td>';
                            echo '<td>'. $row_cliente['telefone'] .'</td>';
                            echo '<td>'. $row_cliente['sexo'] .'</td>';
                            echo '</tr>';
                        }
                      }
                    ?>
                </table>
            </div>

            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th>Tipo:</th>
                        <th>Quartos:</th>
                        <th>Suítes:</th>
                        <th>Salas:</th>
                        <th>Garagem:</th>
                        <th>Armário:</th>
                        <th>Área:</th>
                        <th>Andar:</th>
                        <th>Valor Cond:</th>
                        <th>Portaria:</th>
                    </tr>
                    <?php
                    $result_imovel = "SELECT tipo, qtd_quartos, qtd_suites, qtd_salas, qtd_garagem, armario, area_ , andar, valor_cond, portaria FROM imovel";
                    $resultado_imovel = mysqli_query($conn, $result_imovel) or die(mysqli_error($conn));;
                    if(mysqli_num_rows($resultado_imovel) > 0){

                        while ($row_imovel = mysqli_fetch_assoc($resultado_imovel)) {
                            echo '<tr>';
                            echo '<td>'. $row_imovel['tipo'] .'</td>';
                            echo '<td>'. $row_imovel['qtd_quartos'] .'</td>';
                            echo '<td>'. $row_imovel['qtd_suites'] .'</td>';
                            echo '<td>'. $row_imovel['qtd_salas'] .'</td>';
                            echo '<td>'. $row_imovel['qtd_garagem'] .'</td>';
                            echo '<td>'. $row_imovel['armario'] .'</td>';
                            echo '<td>'. $row_imovel['area_'] .'</td>';
                            echo '<td>'. $row_imovel['andar'] .'</td>';
                            echo '<td>'. $row_imovel['valor_cond'] .'</td>';
                            echo '<td>'. $row_imovel['portaria'] .'</td>';
                            echo '</tr>';
                        }
                      }
                    ?>
                </table>
            </div>
        </div>
    </div>

<?php include "php/footer.php";?>
</body>
</html>