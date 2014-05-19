<?php

class Model_Endereco extends Model{
    public function cadastrar (Vo_Endereco $dados){
        
        if ($dados->getRua() == '') {
            throw new Exception('preencha o campo rua',1);
        }
        
        if ($dados->getBairro() == '') {
            throw new Exception('preencha o campo Bairro',1);
        }
        
        if ($dados->getCEP() == '') {
            throw new Exception('preencha o campo CEP',1);
        }
        
        if ($dados->getCidade() == '') {
            throw new Exception('preencha o campo Cidade',1);
        }
        
        
        $dao = new Dao_Endereco();
        $pk = $dao->create($dados);
    }
}
