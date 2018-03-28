<?php
 
require_once './Conexao.php';
 
require_once './Questionario.php'; 

date_default_timezone_set('America/Sao_Paulo');

class sql_questionario {

     private $con;

        public function __construct() {
        $Conexao = new Conexao();
        $this->con = $Conexao->connection();
    } 
    
    public function novoquestionario($nome_questionario, $descricao, $categoria, $autor){
      try{$stmt = "
          INSERT INTO
            questionario (myid, nome_questionario, descricao, categoria, data, data_update,  autor)
          VALUES (NULL, :nome_questionario, :descricao, :categoria, :data, :data2, :autor)";
        $stmt = $this->con->prepare($stmt);
        $stmt->bindValue(":nome_questionario", $nome_questionario);
        $stmt->bindValue(":descricao", $descricao);
        $stmt->bindValue(":categoria", $categoria);
        $stmt->bindValue(":data", date('Y-m-d H:i:s'));
        $stmt->bindValue(":data2", date('Y-m-d H:i:s'));
        $stmt->bindValue(":autor", $autor);    
        $stmt->execute();
      return $this->processResults($stmt);
      $id_Questionario = $this->con->lastInsertId();
      echo "<script>alert('Sucesso') </script>";
      
      }
      catch (Exception $e){  
        $log = fopen('log.txt', 'a');
        fwrite($log, "ERRO EM 'pesRastreioDAO -> instPesRast' -=- DIA ".date("d/m/Y")." -=- HORA ".date("H:m:s")."\r\n".$e->getMessage()."\r\n");
        fclose($log);
        return false;
      }
    }
    
    public function buscarquestionario(){
      try{
        $stmt = "SELECT myid, nome_questionario, autor, data FROM `questionario`";
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
    
       public function buscarultimoid(){
      try{
        $stmt = "select myid from questionario where myid = (select max(myid)from questionario)";
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
    if($stmt) {
         while($row = $stmt->fetch(PDO::FETCH_OBJ)) {
        
        $objt = new Questionario();
                  
        if (isset($row->myid)){
          $objt->setMyid($row->myid);
        }else{
          $objt->setMyid(NULL);
        }  
        if (isset( $row->nome_questionario)){
             $objt->setNome_questionario($row->nome_questionario);
        }else  {
           $objt->setnome_questionario(NULL);  
        }
             if (isset($row->descricao)){  
          $objt->setDescricao($row->descricao);
         }
          else{
                 
                 $objt->setDescricao(NULL);
          }
        if (isset($row->Categoria)){
             $objt->setCategoria($row->categoria);
        }  
          else{
          $objt->setcategoria(NULL);     
     }
    if (isset( $row->autor)){
         $objt->setAutor($row->autor);
    }
          else{
           $objt->setautor(NULL);    
        }  
   if(isset( $row->data)){
         $objt->setData($row->data);
   }
          else{
$objt->setdata(NULL);    
          }          
if(isset( $row->Data_update )){
         $objt->setData($row->data);
   }
          else{
$objt->setdata_update(NULL);    
          }      
        $results[] = $objt;
            
      }
    }
    return $results;   
  }
    
   
}
?>
