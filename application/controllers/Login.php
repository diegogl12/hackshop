<?php

class Login extends My_Controller
{
    public function __construct() 
    {
        parent::__construct();
    }
    
    public function index()
    {
        
        $this->pagina();
    }
    
    public function validar()
    {
        if($this->input->method() === "post")
        {
            $this->load->model("acidentado_model");
            
            $pesquisa = "";
            
            if(isset($this->input->post('cpf',TRUE)))
            {
                $pesquisa = $this->acidentado_model->pesquisa_cpf();                
            }
            else if(isset($this->input->post('rg',TRUE)))
            {
                $pesquisa = $this->acidentado_model->pesquisa_rg();
            }
            else
            {
                $pesquisa = $this->acidentado_model->pesquisa_digital();
            }
            
            if($pesquisa['situacao'])
            {
                $this->session->set_userdata('validacao', TRUE);
                $this->session->set_userdata('acidentado', $pesquisa);
            }

        }
        else
            redirect();
    }
    
}