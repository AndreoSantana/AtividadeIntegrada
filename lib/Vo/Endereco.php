<?php

class Vo_Endereco extends Vo{
    protected  $atributos = array('rua','bairro','CEP','cidade','UF');
    
    public function getRua() {
        return $this->atributos['rua'];
    }
    
    public function getBairro() {
        return $this->atributos['bairro'];
    }
    
    public function getCEP() {
        return $this->atributos['CEP'];
    }
    
    public function getCidade() {
        return $this->atributos['cidade'];
    }
}
