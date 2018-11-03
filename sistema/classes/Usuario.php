<?php

class Usuario{
	protected $id;
	protected $nome;
	protected $senha;
	protected $apelido;
	protected $tipo_de_acesso;
	protected $email;

	public function __construct($p_id)
	{
		$this->id = $p_id;
		$this->senha = "luiza";
	}

	//PRECISA DE OUTRO CONSTRUTOR

}

class Master extends Usuario{
	

	public function editar_usuario()
	{

	}

	public function criar_usuario()
	{

	}

	public function remover_usuario()
	{

	}

	public function consultar_usuario()
	{
	
	}
}

class Socio extends Usuario{

}

class Logistica extends Usuario{
	
}