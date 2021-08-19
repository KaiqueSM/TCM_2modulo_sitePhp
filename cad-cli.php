<?php
    $conexao = mysql_pconnect('localhost','root','') or die("Problema na conexão com o banco de dados");

    $abreBanco = mysql_select_db("db_tgt",$conexao) or die("Problema ao abrir o banco de dados");



    $vNome = $_POST['txtNome'];
    $vEmail = $_POST['txtEmail'];

    

    $comando=mysql_query("insert into tbl_cliente(nm_cli,email)values('$vNome','$vEmail')") or die(mysql_error());

    echo "<meta http-equiv=\"refresh\" content=\"0;URL=listar-cli.php\">";

    $fechaBanco = mysql_close($conexao);
?>