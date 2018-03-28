<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Questionario
 *
 * @author joliveira
 */
class Questionario {

    private $myid;
    private $nome_questionario;
    private $descricao;
    private $categoria;
    private $data;
    private $data_update;
    private $autor;
    
    
    
    function getMyid() {
        return $this->myid;
    }

    function getNome_questionario() {
        return $this->nome_questionario;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getCategoria() {
        return $this->categoria;
    }

    function getData() {
        return $this->data;
    }

    function getData_update() {
        return $this->data_update;
    }

    function getAutor() {
        return $this->autor;
    }

    function setMyid($myid) {
        $this->myid = $myid;
    }

    function setNome_questionario($nome_questionario) {
        $this->nome_questionario = $nome_questionario;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setCategoria($categoria) {
        $this->categoria = $categoria;
    }

    function setData($data) {
        $this->data = $data;
    }

    function setData_update($data_update) {
        $this->data_update = $data_update;
    }

    function setAutor($autor) {
        $this->autor = $autor;
    }



}
