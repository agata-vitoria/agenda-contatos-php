<?php
require_once '../view/menu.php';
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Listar Todos os Clientes</title>
</head>

<body>
    <?php
    require_once '../conexao/conexao.php';

    $conn = new Conectares();
    $consulta = "select * from tbamigos";
    $resultado = $conn->getConn()->prepare($consulta);
    $resultado->execute();
    ?>
    <div class="tabela">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Data de Nascimento</th>
                    <th scope="col">Grau de Amizade</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($listar = $resultado->fetch(PDO::FETCH_ASSOC)) {
                ?>
                    <tr>
                        <td><?php echo $listar['nome_amigo']; ?></td>
                        <td><?php echo $listar['email']; ?></td>
                        <td><?php echo $listar['telefone']; ?></td>
                        <td><?php echo $listar['data_nascimento']; ?></td>
                        <td><?php echo $listar['grau_amizade']; ?></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>