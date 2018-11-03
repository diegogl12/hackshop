<?php

class Pagamento
{
	protected $tipo;
	protected $valor;

}


class Pag_Vista extends Pagamento
{
	private $desconto;
	
}

class Pag_Credito extends Pagamento
{
	private $parcelamento;

}