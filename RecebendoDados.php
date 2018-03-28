<?php

date_default_timezone_set('America/Sao_Paulo');
$datas = date('Y-m-d H:i:s');

include_once './sql_geral.php';
include_once './Conexao.php';
include_once './sql_questionario.php';



$nome_questionario = isset($_POST["quest"]) ? $_POST["quest"] : "Nome do questionario não informado";
$descricao = isset($_POST["descr"]) ? $_POST["descr"] : "Descrição não informado";
$categoria = isset($_POST["categ"]) ? $_POST["categ"] : "Categoria do questionario não informado";
$autor = isset($_POST["autor"]) ? $_POST["autor"] : "Autor não informado";

$datas = date('Y-m-d H:i:s');
$data2 = date('Y-m-d H:i:s');

$perFechadas  = isset($_POST["perguntasFechadas"]) ? $_POST["perguntasFechadas"] : "Nenhuma pergunta informada";

$perAbertas = isset($_POST["perguntasAbertas"]) ? $_POST["perguntasAbertas"] : "Nenhuma pergunta informada";

$qntPerguntas = isset($_POST["arrPerguntas"]) ? $_POST["arrPerguntas"] : "Nenhuma resposta informada";
$respostas2  = isset($_POST["respostas2"]) ? $_POST["respostas2"] : "Nenhuma resposta informada";

$sql = new sql_geral();
$retorno = $sql->insertgeral($nome_questionario, $descricao, $categoria, $autor, $datas, $data2, $perFechadas, $perAbertas, $qntPerguntas, $respostas2);

//$sql = new sql_geral();
//$perFechadas = array(
//    "Pergunta fechada 0",
//    "Pergunta fechada 1",
//    "Pergunta fechada 2",
//    "Pergunta fechada 3"
//);
//$qntPerguntas = array(
//    3,
//    2,
//    1,
//    2
//);
//$respostas2 = array(
//    array(
//      'Resposta 0-1',
//      'Resposta 0-2',
//      'Resposta 0-3',
//    ),
//    array(
//      'Resposta 1-1',
//      'Resposta 1-2',
//    ),
//    array(
//      'Resposta 2-1'
//    ),
//    array(
//      'Resposta 3-1',
//      'Resposta 3-2',
//    ),
//);
//$perAbertas = array(
//    "Pergunta Aberta 0",
//    "Pergunta Aberta 1",
//    "Pergunta Aberta 2",
//    "Pergunta Aberta 3"
//);
//
//$retorno = $sql->insertgeral('Nome Teste 1', "Descrição teste 1", "Categoria Teste 1", "Autor teste 1", date('Y-m-d H:i:s'), date('Y-m-d H:i:s'), $perFechadas, $perAbertas, $qntPerguntas, $respostas2);
//var_dump($retorno);

if ($retorno === false) {
    echo "<H1>NÃO DEU CERTO, TENTE NOVAMENTE</H1>";
} else {
    echo "Formulario inserido com sucesso";
}








//$return=$sql->insertgeral($_POST["quest"], $_POST["descr"], $_POST["categ"], $_POST["autor"], $datas, $data2, $_POST["perguntasFechadas"], $_POST["perguntasAbertas"], $_POST["arrPerguntas"], $_POST["respostas2"]);

////        
//echo "INSERT INTO
//      questionario(myid, nome_questionario, descricao, categoria, data, data_update, autor)
//      VALUES (NULL, ".$_POST["quest"].", ".$_POST["descr"].", ".$_POST["categ"].", ".date('Y-m-d H:i:s').", ".date('Y-m-d H:i:s').", ".$_POST["autor"].");<br>";
//  $i = 0;
//foreach ($_POST["perguntasFechadas"] as $perguntaF) {
//  echo "INSERT INTO<br>
//        &nbsp;&nbsp;perguntas (myid, id_questionario, texto_pergunta)<br>
//        values (NULL, ultIdQuest, ".$perguntaF.");<br>";
//    
//  for ($cont = 0; $cont < $_POST["arrPerguntas"][$i]; $cont++) {
//    echo "INSERT INTO<br>
//          &nbsp;&nbsp;respostas (myid, texto_resposta, id_perguntas,  correct)<br>
//          values (NULL, ".$_POST["respostas2"][$i][$cont].", idPerguntaF);";
//  }
//  $i++;
//}
//foreach ($_POST["perguntasAbertas"] as $perguntaA){
//  echo "INSERT INTO<br>
//        &nbsp;&nbsp;perguntas (myid, id_questionario, texto_pergunta)<br>
//        values (NULL, ultIdQuestionario, ".$perguntaA.");<br>";
//}

        
        

        
        
        
        
        
        




//$nome_questionario = isset($_POST["quest"]) ? $_POST["quest"]   : "Nome do questionario não informado";
//$descricao = isset($_POST["descr"]) ? $_POST["descr"] : "Descrição não informado";
//$categoria = isset($_POST["categ"]) ? $_POST["categ"] : "Categoria do questionario não informado";
//$autor = isset($_POST["autor"]) ? $_POST["autor"] : "Autor não informado";
//$perAbertas = isset($_POST["perguntasAbertas"])  ? $_POST["perguntasAbertas"] : "Nenhuma pergunta informada";
//$perFechadas = isset($_POST["perguntasFechadas"]) ? $_POST["perguntasFechadas"] : "Nenhuma pergunta informada";
//$qntPerguntas  = isset($_POST["arrPerguntas"])      ? $_POST["arrPerguntas"] : "Nenhuma resposta informada";
//$respostas2  = isset($_POST["respostas2"])      ? $_POST["respostas2"] : "Nenhuma resposta informada";
//   function insertgeral($nome_questionario, $descricao, $categoria, $autor, $texto_pergunta, $texto_resposta){
//      $this->con->beginTransaction();
//        try{$stmt = "
//          INSERT INTO
//          questionario (myid, nome_questionario, descricao, categoria, data, data_update,  autor)
//          VALUES (NULL, :nome_questionario, :descricao, :categoria, :data, :data2, :autor)";
//        $stmt = $this->con->prepare($stmt);
//        $stmt->bindValue(":nome_questionario", $nome_questionario);
//        $stmt->bindValue(":descricao", $descricao);
//        $stmt->bindValue(":categoria", $categoria);
//        $stmt->bindValue(":data", date('Y-m-d H:i:s'));
//        $stmt->bindValue(":data2", date('Y-m-d H:i:s'));
//        $stmt->bindValue(":autor", $autor);    
//        $stmt->execute();
//        $id_Questionario = $this->con->lastInsertId();
//        //insert questionario
//foreach ($perFechadas as $perguntaF){
//    $stmt = "";
//    $stmt .= "
//          INSERT INTO perguntas (myid, id_questionario, texto_pergunta)
//          VALUES (null, :id_questionario, :texto_pergunta)";
//        $stmt = $this->con->prepare($stmt);
//        $stmt->bindValue(":id_questionario", $idQuestionario);
//        $stmt->bindValue(":texto_pergunta", $perguntaF);
//        $stmt->execute();
//       
//}
////insert perguntas
//foreach ($perAbertas as $perguntasA){
//  
//$stmt = "";  
//$stmt .= "
//          INSERT INTO perguntas (myid, id_questionario, texto_pergunta)
//          VALUES (null, :id_questionario, :texto_pergunta)";
//        $stmt = $this->con->prepare($stmt);
//        $stmt->bindValue(":id_questionario", $id_Questionario);
//        $stmt->bindValue(":texto_pergunta", $perguntasA);
//        $stmt->execute();
//        $id_Perguntas = $this->con->lastInsertId();
//        
////receb o id de query_tab_3 => $idPerguntA
//  for ($cont=0; $cont <= $qntPerguntas[i]; $cont++){
//      $stmt = ""; 
//      $stmt .= "
//          INSERT INTO
//            respostas (myid, id_perguntas, texto_resposta, correct)
//          VALUES (null, :id_perguntas, :texto_resposta, NULL)";
//        $stmt = $this->con->prepare($stmt);
//        $stmt->bindValue(":id_perguntas", $id_Perguntas);// ou ".$idPerguntA."
//        $stmt->bindValue(":texto_resposta", ".$respostas2[i][$cont].");
//        $stmt->execute();
//  
//  }
//  $i++;
//  
//  }
//  //ultimo execute usar o commit
//        $this->con->commit();
//      return $this->processResults($stmt); 
//      }
//      
//      catch (Exception $e){  
//        $log = fopen('log.txt', 'a');
//        fwrite($log, "ERRO EM 'pesRastreioDAO -> instPesRast' -=- DIA ".date("d/m/Y")." -=- HORA ".date("H:m:s")."\r\n".$e->getMessage()."\r\n");
//        fclose($log);
//        $this->con->rollBack();
//        return false;
//      }
//    }


//foreach ($perAbertas as $perguntasA){
//  $query_tab_3 .= "insert into perguntas (myid, id_qust, txt) values (NULL, ".$idQuestionario.", ".$perguntaA.");";
//  //receb o id de query_tab_3 => $idPerguntA
//  for ($cont=0; $cont <= $qntPerguntas[i]; $cont++){
//      $query_tab_4 .= "insert into respostas (myid, txt, id_perguntas, correct) values (NULL, ".$respostas2[i][$cont].", ".$idPerguntA.", NULL);";
//  }
//  $i++;
//}
//
//foreach ($perFechadas as $perguntaF){
//  $query_tab_2 .= "insert into perguntas (myid, id_qust, txt) values (NULL, ".$idQuestionario.", ".$perguntaF.");";
//}
//$query_tab3 = "";
//$query_tab4 = "";
//$i = 0;
//$nome_questionario =  $_POST["quest"];
//$descricao = $_POST["descr"];
//$categoria = $_POST["categ"];
//$autor = $_POST["autor"];
//$perAbertas =   $_POST["perguntasAbertas"];
//$perFechadas =  $_POST["perguntasFechadas"];
//$qntPerguntas = $_POST["arrPerguntas"];
//$respostas2  =  $_POST["respostas2"];
//$query_tab_1 = "insert into questionarios (myid, nome, desc, cate, data, data_upd, autor) values (NULL, ".$ques.", ".$descr.", ".$categ.", ".date("Y-m-d H:i:s").", ".date("Y-m-d H:i:s").", ".$autor.")";
////receb o id de query_tab_1 => $idQuestionario
//$query_tab_2 = "";

        
	

//$nome_questionario = isset($_POST["quest"]) ? $_POST["quest"]   : "Nome do questionario não informado";
//$descricao = isset($_POST["descr"]) ? $_POST["descr"] : "Descrição não informado";
//$categoria = isset($_POST["categ"]) ? $_POST["categ"] : "Categoria do questionario não informado";
//$autor = isset($_POST["autor"]) ? $_POST["autor"] : "Autor não informado";
//
//$perguntaA = isset($_POST["perguntasAbertas"])  ? $_POST["perguntasAbertas"] : "Nenhuma pergunta informada";
//$perguntaF = isset($_POST["perguntasFechadas"]) ? $_POST["perguntasFechadas"] : "Nenhuma pergunta informada";
//$qntPerguntas  = isset($_POST["arrPerguntas"])      ? $_POST["arrPerguntas"] : "Nenhuma resposta informada";
//$respostas2  = isset($_POST["respostas2"])      ? $_POST["respostas2"] : "Nenhuma resposta informada";
