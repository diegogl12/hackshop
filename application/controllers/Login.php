<?php

class Login extends CI_Controller
{
    public function __construct() 
    {
        parent::__construct();
        $this->load->model("acidentado_model");
    }
    
    public function index()
    {
        $this->load->view("login");
    }
    
    public function validar()
    {
        if($this->input->method() === "post")
        {
            
            
            $pesquisa = "";
            
            if($this->input->post('usuario',TRUE) != NULL)
            {
                if($this->input->post('documento',TRUE) == 'cpf')
                    $pesquisa = $this->acidentado_model->pesquisa_cpf($this->input->post('usuario',TRUE));
                
                else if($this->input->post('documento',TRUE) == 'rg')
                    $pesquisa = $this->acidentado_model->pesquisa_rg($this->input->post('usuario',TRUE));
            
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
            
            redirect('inicio');

        }
        else
            redirect();
    }
    
}