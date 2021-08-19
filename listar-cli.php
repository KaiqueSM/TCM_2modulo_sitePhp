<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf8">
        <meta name="author" content="Equipe The Growth Tree"/>
        <meta name="description" content="Este é o site da empresa The Growth Tree, uma startup de desenvolvimento de sistemas"/>
        <meta name="keywords" content="desenvilvimento, the growth tree, sistemas, programação"/>
        <meta name="reply-to" content="tgtreedevelopment@gmail.com"/>
        <meta name="robots" content="index.noflow"/>
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0"/>        
        <title> Lista de Clientes </title>

        <link rel="stylesheet" href="cd.css"/>

    </head>
    <body>
        <nav id="sidebar">
        <ul id="ul-sidebar">
                <li> 
                    <img src="https://1.bp.blogspot.com/-NSpXqVO6_4U/X8BDg43_CZI/AAAAAAAAAMw/Gb7Obl1IHCM7bkuRDLQUD--aZF85U0njQCLcBGAsYHQ/s320/logo_redonda_sem_letra.png"/> 
                </li>
                <li>
                    <a href="#"> Mensagens	&raquo; </a>

                    <ul>
                        <li><a href="listar-msg.php">Listar</a></li>
                        <li><a href="cad-msg.html">Novo</a></li>
                        <li><a href="alt-msg.html">Alterar</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"> Clientes	&raquo; </a>
                    
                    <ul>
                        <li><a href="listar-cli.php">Listar</a></li>
                        <li><a href="cad-cli.html">Novo</a></li>
                        <li><a href="alt-cli.html">Alterar</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"> Serviços	&raquo; </a>
                    
                    <ul>
                        <li><a href="listar-serv.php">Listar</a></li>
                        <li><a href="cad-serv.html">Novo</a></li>
                        <li><a href="alt-serv.html">Alterar</a></li>
                    </ul>
                </li>

            </ul>

            <hr/>
            <a href="index.html"><p>Sair</p></a>
        </nav>
        <br/>   


        <div id="conteudo">
            <h3>Lista de Clientes</h3>  
            <table id="tbl">
                <?php
                    $conexao=mysql_pconnect('localhost','root','') or die("Problema ao efetuar a conexão com banco de dados");

                    //abrindo o banco de dados que foi criado na área phpMyAdmin
                    $abre_banco=mysql_select_db('db_tgt',$conexao) or die("Problema ao abrir o banco de dados");

                    $comando=mysql_query("select * from tbl_cliente");
                    echo "<tr class='titulo'><th>Código</th><th>Nome do cliente</th><th>E-mail</th></tr>";
                    
                    while ($linha=mysql_fetch_array($comando))
                    {
                        $codigo=$linha['cd_cli'];
                        $nome=$linha['nm_cli'];
                        $email=$linha['email'];

                        //imprimindo o vetor
                        echo "<tr><td>$codigo</td><td>$nome</td><td>$email</td></tr>";
                    }


                ?>
            </table>

            <section>
            <form method="POST" action="exclui-cli.php">
                    Digite o código que deseja excluir
                    <input type="number" name="txtCdExc" id="txt-cd" placeholder="Código" min="1"/>
                    <input type="submit" value="Excluir" name="btnExcluir" id="btn-excluir"/>
                </form>
            </section>





        </div>


    </body>
</html>