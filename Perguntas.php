<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Perguntas
 *
 * @author joliveira
 */
class Perguntas {
    private $myid;
    private $id_questionario;
    private $texto_pergunta;

    
    function getMyid() {
        return $this->myid;
    }

    function getId_questionario() {
        return $this->id_questionario;
    }

    function getTexto_pergunta() {
        return $this->texto_pergunta;
    }

    function setMyid($myid) {
        $this->myid = $myid;
    }

    function setId_questionario($id_questionario) {
        $this->id_questionario = $id_questionario;
    }

    function setTexto_pergunta($texto_pergunta) {
        $this->texto_pergunta = $texto_pergunta;
    }



}
