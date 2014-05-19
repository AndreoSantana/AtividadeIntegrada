<?php

class Vo_Cliente extends Vo{
    protected $atributos = array('razaoS','nome','CNPJ','IE','DT_Fundacao','RamoAtividade','fone','email');
    
    public function getRazaoS(){
        return $this->atributos['razaoS'];
    }
    
     public function getCNPJ(){
        return $this->atributos['CNPJ'];
    }
    
     public function getDTFundacao(){
        return $this->atributos['DT_Fundacao'];
    }
    
     public function getRamoAtividade(){
        return $this->atributos['RamoAtividade'];
    }
    
    public function getFone() {
        return $this->atributos['fone'];
    }
    
    public function getEmail() {
        return $this->atributos['email'];
    }
    
}

