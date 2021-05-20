<?php

    $codigo = $_POST ('cod-cliente');
    //$nome = $_POST ('nome_cliente');
    //$dt_nascimento = $_POST ('data-nascimento');
    //$profissao = $_POST ('profissao');
    //$empresa_atual = $_POST ('empresa_atual');

    $servidor = "localhost";
    $usuario = "Root";
    $senha= "Admin123";
    $dbname = "empresas"

    //criar a conexão
    $conn = new PDO
    mysqli_connect ($servidor, $usuario, $senha, $dbname);


    $result_usuario = "DELETE FROM cadastro
    WHERE ID = '$codigo' ";
    $resultado_usuario = mysqli_query($comm,  $result_usuario);

?>




