<?php
include_once '../Banco_Query/Query_questionario.php';

 $Query_questionario = new Query_questionario();



if (isset($_POST)){
    if (!empty($_POST['quest'])){

    $return = $Query_questionario->novoquestionario($_POST['quest']);
    }
  if (!empty($_POST['descr'])){
       $return = $Query_questionario->novoquestionario($_POST['descr']);
      
  }
  else  if (!empty($_POST['categ'])){
      $return = $Query_questionario->novoquestionario($_POST['categ']); 
  }
   else  if (!empty($_POST['autor'])){
          $return = $Query_questionario->novoquestionario($_POST['autor']); 
   }
 
}




