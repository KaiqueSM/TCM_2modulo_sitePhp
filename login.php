<?php
    $conexao = mysql_pconnect('localhost','root','') or die("Problema na conexão com o banco de dados");

    $abreBanco = mysql_select_db("db_tgt",$conexao) or die("Problema ao abrir o banco de dados");

    $vNome = $_POST['txtnome'];
    $vSenha = $_POST['txtsenha'];

    $comando = mysql_query("select * from tbl_login where nm_user ='$vNome' and senha = '$vSenha'");

    if(mysql_num_rows($comando) > 0)
    {
        echo "<script> window.location.href = 'listar-msg.php'; </script>";
    }
    else
    {
        echo "<script> window.alert('Dados incorretos') </script>";
        include 'login.html';
    }

    $fechaBanco = mysql_close($conexao);
?>
