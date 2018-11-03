<?php

require_once("../classes/Usuario.php");


//TEM QUE DELETAR
//$senha_temp = "luiza";

$usuario_temp = new Usuario("Vitor");


class ControladorLogin
{


	private function validarUsuario()
	{
		$id_login = $_POST['nome'];

		if($id_login == $usuario_temp->id)
		{
			return new Usuario($id_login);
		}
	}

	private function validarSenha(Usuario $p_usuario)
	{
		$id_senha = $_POST['cliente_passwd'];

		if($p_usuario->senha == $usuario_temp->senha)
		{
			return true;
		}
		else
		{
			return false;
		}

	}

	public function validarLogin()
	{
		$id_login = validarUsuario();
		if(validarSenha($id_login))
		{
			return $usuario_temp;
		}
		else
		{
			return null;
		}
	}


}