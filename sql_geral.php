<?php

require_once './Conexao.php';
require_once './Questionario.php';
require_once './Respostas.php';
require_once './Perguntas.php';
date_default_timezone_set('America/Sao_Paulo');

class sql_geral {

    private $con;

    public function __construct() {
        $Conexao = new Conexao();
        $this->con = $Conexao->connection();
    }

    public function insertgeral($nome_questionario, $descricao, $categoria, $autor, $datas, $data2, $perFechadas, $perAbertas, $respostas2, $qntPerguntas) {
      
       
        
       
        try {
            $this->con->beginTransaction();
            $stmt = "INSERT INTO
          questionario (myid, nome_questionario, descricao, categoria, data, data_update, autor)
          VALUES (NULL, :nome_questionario, :descricao, :categoria, :data, :data2, :autor);";
            $stmt = $this->con->prepare($stmt);
            $stmt->bindValue(":nome_questionario", $nome_questionario);
            $stmt->bindValue(":descricao", $descricao);
            $stmt->bindValue(":categoria", $categoria);
            $stmt->bindValue(":autor", $autor);
            $stmt->bindValue(":data", $datas);
            $stmt->bindValue(":data2", $data2);
            
            $stmt->execute();
            $id_Questionario = $this->con->lastInsertId();
      
            
            foreach ($perFechadas as $perguntaF) {
                $sql ="INSERT INTO perguntas (myid, id_questionario, texto_pergunta) values (NULL, :id_questionario, :texto_pergunta);";
                $sql = $this->con->prepare($sql);
                $sql->bindValue(":id_questionario", $id_Questionario);
                $sql->bindValue(":texto_pergunta", $perguntaF);
                $sql->execute();
                $idPerguntF = $this->con->lastInsertId();
                for ($cont = 0; $cont < $qntPerguntas; $cont++) {
                foreach ($respostas2 as $RespostasValor){
                $sql_2 = "INSERT INTO respostas (myid, texto_resposta, id_perguntas) values (NULL, :texto_resposta, :id_perguntas);";
                $sql_2 = $this->con->prepare($sql_2);
                $sql_2->bindValue(":texto_resposta", $RespostasValor);
                $sql_2->bindValue(":id_perguntas", $idPerguntF);
                $sql_2->execute();    
      }
           }
           
                foreach ($perAbertas as $perguntasAbertas) {
                    
                    $nova = explode("=", $perguntasAbertas);
                    var_dump($nova);
                $sql ="INSERT INTO perguntas (myid, id_questionario, texto_pergunta) values (NULL, :id_questionario, :texto_pergunta);";
                $sql = $this->con->prepare($sql);
                $sql->bindValue(":id_questionario", $id_Questionario);
                $sql->bindValue(":texto_pergunta", $nova[1]);
                $sql->execute();
                 die("teste");
            $this->con->commit();
                
                   return true;
                    }
    
              
                 
                }

        }
        catch (Exception $f) {
            $log = fopen('loge.txt', 'a');
            fwrite($log, "ERRO EM ' -> instPesRast' -=- DIA " . date("d/m/Y") . " -=- HORA " . date("H:m:s") . "\r\n" . $f->getMessage() . "\r\n");
            fclose($log);
            $this->con->rollBack();
            return false;
        }
    }
}
