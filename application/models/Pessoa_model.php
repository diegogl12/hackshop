<?php

class Pessoa_model extends CI_Model
{
    
    public function __construct() {
        parent::__construct();
    }
            
    
    public function pesquisa_digital($dadosp)
    {
        $dados = Array (
            'situacao' => true,
            'nome' => 'Diego',
            'sobrenome' => 'Gomes de Lima',
            'cpf' => '132.890.617-52',
            'rg' => '23.946.540-4',
            'origem' => 'digital'
        );
        
        return $dados;
    }
    
    public function pesquisa_cpf($dadosp)
    {
        $dados = Array (
            'situacao' => true,
            'nome' => 'Diego',
            'sobrenome' => 'Gomes de Lima',
            'cpf' => '132.890.617-52',
            'rg' => '23.946.540-4',
            'origem' => 'cpf'
        );
        return $dados;
    }
    
    public function pesquisa_rg($dadosp)
    {
        $dados = Array (
            'situacao' => true,
            'nome' => 'Nayara',
            'sobrenome' => 'Nunes',
            'cpf' => '132.890.617-52',
            'rg' => '23.946.540-4',
            'origem' => 'rg'
        );        
    
        return $dados;
    }
}

