<?php
include("conexaoBD.php");
if (!$_conecta) {
    echo 'Não foi possível a conexão com o banco: ' . mysqli_error($_conecta);
}
//Insere registros no banco de dados
$nome = $_POST['nomePosto'];
$rua = $_POST['rua'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$fone = $_POST['fone'];
$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];


$_sql = "insert into PostoDescricao ( nome_posto, rua, numero, bairro, fone, latitude, longitude) values('$nome', '$rua', '$numero', '$bairro', '$fone', '$latitude', '$longitude')";
$_res = $_conecta->query($_sql);
if($_res === FALSE){
    echo "Erro na inclusão dos registros..." . $_conecta->error . "<br/>";
} else {
    echo $_conecta->affected_rows . " Registros incluidos com sucesso<br/>";
}
$_conecta->close();


?>
