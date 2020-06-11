<?php
require_once 'menu.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Adicionar Contato</title>
</head>

<body>
    <div class="formulario">
        <form action="..\model\gravarDados.php" method="POST">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Nome</label>
                    <input type="text" class="form-control" name="nome" placeholder="Nome">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Email">
                </div>
            </div>
            <div class="form-group">
                <label for="inputAddress">Telefone</label>
                <input type="text" class="form-control" name="telefone" placeholder="(11)12345-6789">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCity">Data de Nascimento</label>
                    <input type="text" class="form-control" name="data_nascimento">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputState">Grau de Amizade</label>
                    <select class="custom-select my-1 mr-sm-2" name="grau_amizade">
                        <option selected>Escolher...</option>
                        <option value="MA">Melhor Amigo</option>
                        <option value="AM">Amigo</option>
                        <option value="CG">Colega</option>
                        <option value="NL">Nem Ligo</option>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary my-1 mr-sm-2">Cadastrar</button>
        </form>
    </div>
</body>

</html>