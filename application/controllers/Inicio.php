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
            $this->pagina_atual = "login";
            
            $this->pagina();
        }
        
        

}