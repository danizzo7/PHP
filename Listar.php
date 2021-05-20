<?php
    include_once ('Conexao.php');

//consultar no banco de dados
    $result_usuario = "SELECT * FROM cadastro ORDER BY ASC";
    $resultado_usuario = mysqli_query ($comm, $result_usuario);

//Verificar registros
if ( $resultado_usuario) and ($resultado_usuario-->num_rows !=0)){}
    while ($row_usuario = mysql_fetch_assoc ($resultado_usuari)) {
    echo $row_usuario (ID, Nome, Dt_nasc, Profissao, Empresa );
    }

} else {
    echo "Nenhum Cliente Encontrado"
    }
?>





