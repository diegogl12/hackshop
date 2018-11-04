<?php
defined('BASEPATH') OR exit('No direct script acess allowed');

class Inicio extends My_Controller
{  
        function __construct()
        {
            parent::__construct();
        }
        
        function index()
        {
            $this->pagina_atual = "inicio";
            
            
            $this->conteudo['pessoa'] = $this->session->userdata('acidentado');
            $this->pagina();
        }
        
        

}