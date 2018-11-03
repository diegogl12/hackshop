<?php
   

class My_Controller extends CI_Controller 
{    
    
    public $conteudo;
    public function __construct()
    {
        parent::__construct();
        
        if(!$this->session->userdata('validacao'))
        {
            redirect('login');
        }
        
        $this->header_sidebar = array();
        $this->conteudo = array();
        $this->pagina_atual = "";
        
    }
    
    public function pagina()
    {
        //$this->load->view('header',$this->header_sidebar);
        //$this->load->view('sidebar',$this->session->all_userdata());
        $this->load->view($this->pagina_atual,$this->conteudo);
        //$this->load->view('footer',$this->header_sidebar);
    }
}
