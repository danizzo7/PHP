<?php

    $codigo = $_POST ('cod-cliente');
    $nome = $_POST ('nome_cliente');
    $dt_nascimento = $_POST ('data-nascimento');
    $profissao = $_POST ('profissao');
    $empresa_atual = $_POST ('empresa_atual');

    $servidor = "localhost";
    $usuario = "Root";
    $senha= "admin123";
    $dbname = "empresas"

    //criar a conexão
    $conn = new PDO
    mysqli_connect ($servidor, $usuario, $senha, $dbname);


    $result_usuario = "UPDATE cadastro set
    Nome ='$nome_usuario',
    Dt_nasc = '$dt_nascimento',
    Profissao =  '$profissao',
    Empresa = '$empresa_atual'
    WHERE ID = '$codigo' ";
    $resultado_usuario = mysqli_query($comm,  $result_usuario);

?>




