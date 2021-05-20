<?php
    $hostname="localhost";
	$username="Root";
	$password="Admin123";
	$dbname="empresas";
	//$usertable="cadastro";


    Create connection $conn = mysqli_connect($hostname, $username, $password, $dbname);
    // Check connection
    if (!$conn) { die(“Connection failed:” .
    mysqli_connect_error()); } echo “Connected successfully”;
	mysqli_connect($hostname,$username, $password) or die ("html>script language='JavaScript'>alert('Unable to connect to database! Please try again later.'),history.go(-1)/script>/html>");
	mysqli_select_db($dbname);

    //include_once ('Conexao.php');
    $Cod_Cli= $_POST ('cod-cliente');
    $nome = $_POST ('nome_cliente');
    $dt_nascimento = $_POST ('data-nascimento');
    $profissao = $_POST ('profissao');
    $empresa_atual = $_POST ('empresa_atual');

    $stmt = $conn->prepare(
    $cadastro = "INSERT INTO dados.cadastro (ID, Nome, Dt_nasc, Profissao, Empresa) VALUES ($Cod_Cli, $nome, $dt_nascimento, $profissao, $empresa_atual)";

    $stmt->bindValue(':cod-cliente', $Cod_Cli);
    $stmt->bindValue(':nome_cliente', $nome ;
    $stmt->bindValue(':data-nascimento',$dt_nascimento ;
    $stmt->bindValue(':profissao',  $profissao ;
    $stmt->bindValue(':empresa_atual',  $empresa_atual ;
    $stmt->execute();
    $cadastro_result = mysqli_query ($conn, $cadastro)

?>




