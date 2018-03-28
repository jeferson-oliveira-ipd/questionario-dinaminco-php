<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Respostas
 *
 * @author joliveira
 */
class Respostas {
    private $myid; 
    private $id_perguntas;
    private $texto_resposta;
   
    function getMyid() {
        return $this->myid;
    }

    

    function getId_perguntas() {
        return $this->id_perguntas;
    }

    function getTexto_resposta() {
        return $this->texto_resposta;
    }

    

    function setMyid($myid) {
        $this->myid = $myid;
    }

    

    function setId_perguntas($id_perguntas) {
        $this->id_perguntas = $id_perguntas;
    }

    function setTexto_resposta($texto_resposta) {
        $this->texto_resposta = $texto_resposta;
    }

 

//put your code here
}
