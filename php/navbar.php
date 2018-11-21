<?php
    include("validaAdmin.php");
    if (!isset($_SESSION["login"])) {
        $logado = false;
    } else {
        $logado = true;
    }
?>

<div class="container-fluid">
    <div class="row">
    <?php if ($logado == false){ ?>
        <header class="cabecalho col-sm-12">
            <nav class="menu">
                <ul>
                    <li><img src="imagens/logo.png" class="imglogo"></li>
                    <li <?php if ($paginaAtiva == 'index') echo "class='active' "; ?>><a href="index.php">Home</a></li>
                    <li <?php if ($paginaAtiva == 'imoveis') echo "class='active' "; ?>><a href="pesquisaImovel.php">Imóveis</a></li>
                </ul>
            </nav>

            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Login</button>
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">

                    <div class="modal-content">

                        <div class="modal-header">
                            <h4 class="modal-title">Digite os dados para Login</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="login">Login:</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="login" id="login" placeholder="Digite o login" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="senha">Senha:</label>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control" name="senha" id="senha" placeholder="Digite a senha" required>
                                    </div>
                                </div>
                            </div>

                            <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Acessar</button> 
                            <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </header>
    <?php }?>
    <?php if ($logado == true) {?>
        <header class="cabecalho col-sm-12">
            <nav class="menuAdmin">
                <ul>
                    <li><img src="imagens/logo.png" class="imglogo"></li>
                    <li <?php if ($paginaAtiva == 'cadastroFuncionario') echo "class='active' "; ?>><a href="cadastroFuncionarios.php">Cadastro Funcionário</a></li>
                    <li <?php if ($paginaAtiva == 'cadastroCliente') echo "class='active' "; ?>><a href="cadastroClientes.php">Cadastro Cliente</a></li>
                    <li <?php if ($paginaAtiva == 'cadastroImoveis') echo "class='active' "; ?>><a href="cadastroImoveis.php">Cadastro Imóveis</a></li>
                    <li <?php if ($paginaAtiva == 'lista') echo "class='active' "; ?>><a href="listaPesquisa.php">Listagem</a></li>
                </ul>
            </nav>

            <button type="button" class="btn btn-info btn-lg" onClick="window.open('php/logout.php', '_self');">Sair</button>
        </header>
    <?php }?>
    </div>
</div>
