<?php

// SDK de Mercado Pago
require  'vendor/autoload.php';

include_once('app/Conf.php');
include_once('app/Globals.class.php');
include_once('class/article.class.php');


class procesarPago{
	
	/**
	*Objeto preference
	*
	*@var $preference
	*/
	private $preference;

	/**
	*Objeto Articulo
	*
	*@var $Articulo
	*/
	private $Articulo;

	/**
	*Variable Unidad
	*
	*@var $Unidad
	*/
	private $Unidad;

	function __construct($Unidad){

		$this->Unidad = $Unidad;
		$this->Articulo = new Articulo();
		
	}
	
	
	function getPreference(){
		// Agrega credenciales
		MercadoPago\SDK::setAccessToken('TEST-6317427424180639-042414-17afbab8a24694cba7fdeb436bf09594-469485398');
		
		// Crea un objeto de preferencia
		$this->preference = new MercadoPago\Preference();
		
		//Formas e Pago
		$this->preference->payment_methods = array(
		  "excluded_payment_methods" => array(
			array("id" => "amex")
		  ),
		  "excluded_payment_types" => array(
			array("id" => "atm")
		  ),
		  "installments" => 6
		);
		//------------------------------------------				
		//Item a comprar
		$item = new MercadoPago\Item();
		$item->id = $this->getArticulo()->GetId();
		$item->title = $this->getArticulo()->GetTitle();
		$item->description = $this->getArticulo()->GetDescripcion();
		$item->quantity = $this->getUnidad();
		$item->currency_id = "ARS";
		$item->unit_price = $this->getArticulo()->GetPrice();
		$item->picture_url  = CNF_GLOBAL_DOMINIO. "/" . $this->getArticulo()->GetImage();
		//------------------------------------------
		//Vinculación del item a la preferencia
		$this->preference->items = array($item);
		//------------------------------------------


		//Datos del comprador
		//------------------------------------------
		$payer = new MercadoPago\Payer();
		$payer->name = "Lalo";
		$payer->surname = "Landa";
		$payer->email = "test_user_63274575@testuser.com";
		$payer->date_created = "2018-06-02T12:58:41.425-04:00";
		$payer->phone = array(
		  "area_code" => "11",
		  "number" => "22223333"
		);
		
		$payer->identification = array(
		  "type" => "DNI",
		  "number" => "22333444"
		);

		$payer->address = array(
		"street_name" => "Falsa",
		"street_number" => 123,
		"zip_code" => "1111"
		);

		$this->preference->payer = $payer;
		//------------------------------------------
		
		//URL´s Post Pago
		$this->preference->back_urls = array(
			"success" => CNF_GLOBAL_DOMINIO. "/success.php",
			"failure" => CNF_GLOBAL_DOMINIO. "/failure.php",
			"pending" => CNF_GLOBAL_DOMINIO. "/pending.php",
		);
		//$this->preference->auto_return = "all";		
		$this->preference->auto_return = "approved";
		
		//Configuraciones generales		
		$this->preference->external_reference = "ABCD1234";
		//$this->payment->binary_mode = true;
		
		//------------------------------------------
		// 
		
		$this->preference->save();

		# Guardar y postear la preferencia
		return $this->preference; 

	}

	function getArticulo(){
		return $this->Articulo;
	}

	function getUnidad(){
		return $this->Unidad;
	}


}

?>
