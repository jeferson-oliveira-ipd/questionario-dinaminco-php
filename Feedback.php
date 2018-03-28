<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Feedback
 *
 * @author joliveira
 */
class Feedback {

    private $myid;
    private $texto_feed;
    private $sugestoes;

    
    function getmyId() {
        return $this->myid;
    }

    function getTexto_feed() {
        return $this->texto_feed;
    }

    function getSugestoes() {
        return $this->sugestoes;
    }

    function setId($myid) {
        $this->myid = $myid;
    }

    function setTexto_feed($texto_feed) {
        $this->texto_feed = $texto_feed;
    }

    function setSugestoes($sugestoes) {
        $this->sugestoes = $sugestoes;
    }

        //put your code here
}
