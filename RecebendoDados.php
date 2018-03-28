<?php

date_default_timezone_set('America/Sao_Paulo');
$datas = date('Y-m-d H:i:s');

include_once './sql_geral.php';
include_once './Conexao.php';
include_once './sql_questionario.php';




$nova = explode("&", $POST["perguntasAbertas"]);



$nome_questionario = isset($_POST["quest"]) ? $_POST["quest"] : "Nome do questionario não informado";
$descricao = isset($_POST["descr"]) ? $_POST["descr"] : "Descrição não informado";
$categoria = isset($_POST["categ"]) ? $_POST["categ"] : "Categoria do questionario não informado";
$autor = isset($_POST["autor"]) ? $_POST["autor"] : "Autor não informado";
$datas = date('Y-m-d H:i:s');
$data2 = date('Y-m-d H:i:s');

$perFechadas = isset($_POST["perguntasFechadas"]) ? $_POST["perguntasFechadas"] : "Nenhuma pergunta informada";
$perAbertas = isset($_POST["perguntasAbertas"]) ? $_POST["perguntasAbertas"] : "Nenhuma pergunta informada";

$qntPerguntas = isset($_POST["total"]) ? $_POST["total"] : "Nenhuma resposta informada";
$respostas2 = isset($_POST["respostas2"]) ? $_POST["respostas2"] : "Nenhuma resposta informada";

$sql = new sql_geral();
$retorno = $sql->insertgeral($nome_questionario, $descricao, $categoria, $autor, $datas, $data2, $perFechadas, $nova, $respostas2, $qntPerguntas);























if ($retorno === false) {
    echo "NÃO";
}
if ($retorno === true) {
    //echo $_POST["perguntasAbertas"];
    echo $retorno;
    
    
} else {
    echo $retorno;
}
