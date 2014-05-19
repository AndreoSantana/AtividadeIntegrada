<?php

class Cliente_Model extends Model{
    public function cadastrar(Vo_Cliente $dados ){
        if ($dados->getRazaoS == '') {
            throw new Exception('preencha o campo razao social',1);
        }
        if ($dados->getCNPJ == '') {
            throw new Exception('preencha o campo CNPJ',1);
        }
        if ($dados->getDTFundacao == '') {
            throw new Exception('preencha o campo a data da fundaçao',1);
        }
        
        if ($dados->getRamoAtividade == '') {
            throw new Exception('preencha o campo Ramo de Atividade',1);
        }

        
        $dao = new DAO_Cliente();
        $pk = $dao->create($dados);
        
    }
}

