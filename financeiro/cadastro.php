<?php

require_once "../DAO/UsuarioDAO.php";

if (isset($_POST["btn_enviar"])) {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha1 = $_POST["senha1"];
    $senha2 = $_POST["senha2"];

    $objdao = new UsuarioDao();
    $ret = $objdao->CriarCadastro($nome, $email, $senha1, $senha2);
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<?php
include_once '_head.php';
?>

<body>
    <div class="banner">
        <img src="./assets/img/moedas2.gif" type="gif">
    </div>
    <div class="container">
        <div class="row text-center  ">
            <div class="col-md-12">
                <div class="titulo">
                    <img src="./assets/img/easybanklogo2.png" alt="EasyBanklogo">
                </div>
                <div class="row">
                    <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <strong> Novo Usuario ? Registre - se </strong>
                            </div>
                            <div class="panel-body">
                                <form method="post" action="cadastro.php">
                                    <br />
                                    <?php include_once "_msg.php" ?>
                                    <div class="form-group input-group">
                                        <span class="input-group-addon"><img src="./assets/img/user.png" width=15 height=15><i class="fa fa-circle-o-notch"></i></span>
                                        <input id="nome" type="text" class="form-control" placeholder="Seu nome" name="nome" />
                                    </div>
                                    <div class="form-group input-group">
                                        <span class="input-group-addon"><img src="./assets/img/email.png" width=15 height=15></span>
                                        <input id="email" type="text" class="form-control" placeholder="Seu melhor e-mail" name="email" />
                                    </div>
                                    <div class="form-group input-group">
                                        <span class="input-group-addon"><img src="./assets/img/password.png" width=15 height=15></span>
                                        <input id="senha1" type="password" class="form-control" placeholder="Sua senha" name="senha1" />
                                    </div>
                                    <div class="form-group input-group">
                                        <span class="input-group-addon"><img src="./assets/img/password.png" width=15 height=15></span>
                                        <input id="senha2" type="password" class="form-control" placeholder="Repita sua senha" name="senha2">
                                    </div>
                                    <button onclick="return ValidarCadastro()" class="btn btn-success " name="btn_enviar">Tudo Pronto</button>
                                    <hr />
                                    Já possui cadastro ?
                                    <a href="login.php">Fazer Login</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</body>

</html>