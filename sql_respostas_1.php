<?php


 require_once './Conexao.php';
 require_once './Respostas.php';
 
class sql_respostas {
    
private $con;

        public function __construct() {
        $Conexao = new Conexao();
        $this->con = $Conexao->connection();
    }

    public function insertRespostas ($id_perguntas, $texto_resposta, $correct){
     try{
        $stmt = "
          INSERT INTO
            respostas (myid, id_perguntas, texto_resposta, correct)
          VALUES (null, :id_perguntas, :texto_resposta, :correct)";
        $stmt = $this->con->prepare($stmt);
        $stmt->bindValue(":id_perguntas", $id_perguntas);
        $stmt->bindValue(":texto_resposta", $texto_resposta);
        
        $stmt->bindValue(":correct", $correct);
        $stmt->execute();
      return $this->processResults($stmt); 
      }
      catch (Exception $e){  
        $log = fopen('log.txt', 'a');
        fwrite($log, "ERRO EM 'pesRastreioDAO -> instPesRast' -=- DIA ".date("d/m/Y")." -=- HORA ".date("H:m:s")."\r\n".$e->getMessage()."\r\n");
        fclose($log);
        return false;
      }
    }
    
     public function buscarRespostas(){
      try{
        $stmt = "SELECT * FROM `respostas`";
        $stmt = $this->con->prepare($stmt);
        $stmt->execute();
      return $this->processResults($stmt); 
      
          
      }
    
      catch (Exception $e){  
        $log = fopen('log.txt', 'a');
        fwrite($log, "ERRO EM 'pesRastreioDAO -> instPesRast' -=- DIA ".date("d/m/Y")." -=- HORA ".date("H:m:s")."\r\n".$e->getMessage()."\r\n");
        fclose($log);
        return false;
      }
    }
    
    private function processResults($stmt){
    $results = array();
    if($stmt){
      while($row = $stmt->fetch(PDO::FETCH_OBJ)){
        $objt = new Respostas() && new Questionario() && new Respostas();
        $objt->setMyid($row->myid);
        $objt->setId_perguntas($row->id_perguntas);
        $objt->setTexto_resposta($row->texto_resposta);
           $objt->setCorrect($row->correct);
        $results[] = $objt;
      }
    }
    return $results;
  }
}
