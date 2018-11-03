<?php

class Entrega{
	private $id;
	private $prazo;
	private $local;
	private $cep;
	private $codigo_rastreio;
	private $transportadora;
	private $frete;
	private $data_envio;
}

class Entrega_Logistica extends Entrega{

}

class Entrega_Cliente extends Entrega{
	
}