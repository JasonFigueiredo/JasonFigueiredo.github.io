<?php
require_once "../DAO/UtilDAO.php";
UtilDAO::VerificarLogado();
require_once '../DAO/ContaDAO.php';
$dao = new ContaDAO();

$contas = $dao->ConsultarConta();

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
include_once '_head.php';
?>

<body>
    <div id="wrapper">
        <?php
        include_once '_topo.php';
        include_once '_menu.php';
        ?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <?php include_once "_msg.php"?>
                        <h2><strong>Consultar Contas</strong></h2>
                        <h5>Aqui você poderá consultar todas as suas contas.</h5>
                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Contas Cadastradas, Caso deseja alterar, Clique no botão.
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Banco</th>
                                        <th>Agência</th>
                                        <th>Numero da Conta</th>
                                        <th>Saldo</th>
                                        <th>Ação</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($contas as $item) {?>
                                    <tr class="odd gradeX">
                                        <td><?= $item['banco_conta'] ?></td>
                                        <td>Nº <?= $item['agencia_conta'] ?></td>
                                        <td>Nº <?= $item['numero_conta'] ?></td>
                                        <td>R$ <?= $item['saldo_conta'] ?></td>
                                        <td>
                                            <a href="alterar_contas.php?cod=<?= $item['id_conta']?>" class="btn btn-primary" class="fa fa-edit ">Alterar</a>
                                        </td>
                                    </tr>
                                    <?php }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>

</body>

</html>