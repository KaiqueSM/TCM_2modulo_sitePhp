<?php
    $conexao = mysql_pconnect('localhost','root','') or die("Problema na conexão com o banco de dados");

    $abreBanco = mysql_select_db("db_tgt",$conexao) or die("Problema ao abrir o banco de dados");



    $vNome = $_POST['txtNome'];
    $vEmail = $_POST['txtEmail'];
    $vMensagem = $_POST['txtAssunto'];

    

    $comando=mysql_query("insert into tbl_mensagem(nm_cliente,email,mensagem)values('$vNome','$vEmail','$vMensagem')") or die(mysql_error());

    echo "<script> history.back(); </script>";

    $fechaBanco = mysql_close($conexao);
?>


