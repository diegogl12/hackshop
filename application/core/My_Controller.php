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
        $this->conteudo_sidebar = array();
        $this->pagina_atual = "";
        
    }
    
    public function pagina()
    {
        $this->conteudo_sidebar['userdata'] = $this->session->all_userdata();
        
        $this->load->view('header',$this->header_sidebar);
        $this->load->view('sidebar',$this->conteudo_sidebar);
        $this->load->view($this->pagina_atual,$this->conteudo);
        //$this->load->view('footer',$this->header_sidebar);
    }
}
