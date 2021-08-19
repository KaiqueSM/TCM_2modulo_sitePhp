<?php
    $conexao = mysql_pconnect('localhost','root','') or die("Problema na conexão com o banco de dados");

    $abreBanco = mysql_select_db("db_tgt",$conexao) or die("Problema ao abrir o banco de dados");

    $cd = $_POST['txtCd'];
    $cdCli = $_POST['txtCdCli'];
    $tipo = $_POST['txtTipo'];
    $data = $_POST['txtData'];




    $comando=mysql_query("select * from tbl_cliente where cd_cli = $cdCli") or die(mysql_error());

    if(mysql_num_rows($comando) > 0)
    {
        $comando=mysql_query("update tbl_servico set cd_cli = '$cdCli',
        tipo_servico = '$tipo',
        dt_servico = '$data'
        where cd_servico = $cd") or die(mysql_error());
    
        echo "<meta http-equiv=\"refresh\" content=\"0;URL=listar-serv.php\">";
    }
    else
    {
        echo "<script> window.alert('Código do cliente inexistente'); </script>";
        echo "<script> history.back(); </script>;";
    }





    



    $fechaBanco = mysql_close($conexao);
?>