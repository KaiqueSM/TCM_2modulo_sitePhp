<?php

    $conexao = mysql_pconnect('localhost','root','') or die("Problema na conexão com o banco de dados");

    $abreBanco = mysql_select_db("db_tgt",$conexao) or die("Problema ao abrir o banco de dados");

    $vCd = $_POST['txtCdExc'];
    
    $comando=mysql_query("DELETE FROM `tbl_mensagem` WHERE `cd_contato` = $vCd LIMIT 1;") or die(mysql_error());
    
    echo "<meta http-equiv=\"refresh\" content=\"0;URL=listar-msg.php\">";


?>
