<?php

class Atendimento extends My_Controller
{
    public function __construct() 
    {
        parent::__construct();
    }
    
    public function index()
    {
        $this->pagina_atual = 'atendimento';
        $this->conteudo_sidebar['sidebar'] = 2;
        
        $this->pagina();
    }
   
    
}
