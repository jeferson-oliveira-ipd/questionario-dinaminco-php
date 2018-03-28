<?php
require_once './sql_questionario.php';


$Query_questionario = new sql_questionario();

$return = $Query_questionario->buscarultimoid();
echo $return[0]->getMyid();

?>
