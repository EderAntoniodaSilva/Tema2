<?php
include ("conexaoBD.php"); //faz a conexão ao banco de dados

$_sql = "select * from PostoDescricao";
    $_res = $_conecta->query($_sql);
    if($_res === FALSE){
        echo "Erro na consulta do banco.".$_conecta->error."<br/>";
    } else{

       /* echo "Banco lido com sucesso <br/>";

        $_nr = $_res->num_rows;
        echo "A consulta retornou ".(int) $_nr . " registros <br/>";*/
    }

    $postos = array();

    while($_localidades = $_res->fetch_assoc()){



        array_push($postos, $_localidades);
    }
$_conecta->close();
?>
