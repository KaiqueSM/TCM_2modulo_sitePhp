<?php
    $conexao = mysql_pconnect('localhost','root','') or die("Problema na conexão com o banco de dados");

    $abreBanco = mysql_select_db("db_tgt",$conexao) or die("Problema ao abrir o banco de dados");


    $vNome=$_POST['txtNome'];
    $vEmail = $_POST['txtEmail'];
    $vCd=$_POST['txtCd'];



    $comando=mysql_query("select * from tbl_cliente where cd_cli = $vCd") or die(mysql_error());

    if(mysql_num_rows($comando) > 0)
    {
        $comando=mysql_query("update tbl_cliente set nm_cli = '$vNome',
        email = '$vEmail'
        where cd_cli = '$vCd'") or die(mysql_error());
    
        echo "<meta http-equiv=\"refresh\" content=\"0;URL=listar-cli.php\">";
    }
    else
    {
        echo "<script> window.alert('Código do cliente inexistente'); </script>";
        echo "<script> history.back(); </script>;";
    }




    $fechaBanco = mysql_close($conexao);
?>