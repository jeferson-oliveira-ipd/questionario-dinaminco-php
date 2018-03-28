<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Query_perguntas
 *
 * @author joliveira
 */
 require_once './Conexao.php';
 require_once './Perguntas.php'; 
 require_once './sql_questionario.php';


class sql_perguntas {

    private $con;

        public function __construct() {
         $Conexao = new Conexao();
        $this->con = $Conexao->connection();
    }
 
    public function inserirperguntas ($id_questionario ,$texto_pergunta){
     try{
         
        $stmt = "
          INSERT INTO
            perguntas (myid, id_questionario, texto_pergunta)
          VALUES (null, :id_questionario, :texto_pergunta)";
        $stmt = $this->con->prepare($stmt);
        $stmt->bindValue(":id_questionario", $id_questionario);
        $stmt->bindValue(":texto_pergunta", $texto_pergunta);
       
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
    
    public function buscarperguntas(){
      try{
        $stmt = "SELECT * FROM `perguntas`";
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
        $objt = new Perguntas();
        $objt->setMyid($row->myid);
        $objt->setId_questionario($row->id_questionario);
        $objt->setTexto_pergunta($row->texto_pergunta);
        $results[] = $objt;
      }
    }
    return $results;
  }
}
    
    
    

        
        
    


//fim da classe
