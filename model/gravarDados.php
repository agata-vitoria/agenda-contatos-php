<?php

require_once '../conexao/conexao.php';

if ($_POST['nome'] != "") {
    $Conn = new Conectares();
    $query = "insert into tbamigos(nome_amigo, email, telefone, data_nascimento, grau_amizade)
        values
        (:nome, :email, :telefone, :dataNascimento, :grauAmizade)";
    $cadastrar = $Conn->getConn()->prepare($query);
    $cadastrar->bindParam(':nome', $_POST["nome"], PDO::PARAM_STR);
    $cadastrar->bindParam(':email', $_POST["email"], PDO::PARAM_STR);
    $cadastrar->bindParam(':telefone', $_POST["telefone"], PDO::PARAM_STR);
    $cadastrar->bindParam(':dataNascimento', $_POST["data_nascimento"], PDO::PARAM_STR);
    $cadastrar->bindParam(':grauAmizade', $_POST["grau_amizade"], PDO::PARAM_STR);
    $cadastrar->execute();
    if ($cadastrar->rowCount()) {
        echo "Cadastrado com sucesso";
    } else {
        echo 'Dados não cadastrado';
    }
} else {
    echo "Dados incompleto!";
}
