<?php
/**
 * Clase Articulo
 *
 * 
 * Encargada del manejo de las operaciones sobre la tabla articulos en el sistema
 * 
 * @uses DataBase
 * @acces public
 * @author Sebastián Gañán
 * @version 19.10.24
 */
class Articulo{
	/**
	*Id del Articulo
	*
	*@var id
	*/
	var $id= '';
	
	
	/**
	*Título del Articulo
	*
	*@var Title
	*/
	var $Title= '';
	
	/**
	*Precio  del Articulo
	*
	*@var Price
	*/
    var $Price= '';
    
	/**
	*Descripción  del Articulo
	*
	*@var Descripcion
	*/
	var $Descripcion= '';
	
	/**
	*Imagen del Articulo
	*
	*@var Image
	*/
    var $Image= '';
    
    /**
	*Cantidad disponible
	*
	*@var Cantidad
	*/
	var $Cantidad= '100';
	

	
//-----------------------------------------------------------------------------------------------------------------------------------
//																Constructor							
//-----------------------------------------------------------------------------------------------------------------------------------
		

	/**
	*Constructor de la clase Articulo
	*
	*@acces public
	*@param int $id clave primaria de la tabla para instanciar el objeto
	*/
	function __construct($id = -1){
		$this->SetId($id);
	}
		
//-----------------------------------------------------------------------------------------------------------------------------------
//																Funciones Set							
//-----------------------------------------------------------------------------------------------------------------------------------

	/**
	 *Setea el valor del campo idArticulo
	 *
	 *@acces public
	 *@param int(11) unsigned $param Clave primaria de la tabla
	 */
	 public function SetId($param){
		$this->id = $param;
	}
	
	
	/**
	 *Setea el valor del campo Title
	 *
	 *@acces public
	 *@param varchar $param Nombre del Articulo
	 */
	 public function SetTitle($param){
		$this->Title = $param;
	}
	
	/**
	 *Setea el valor del campo Precio
	 *
	 *@acces public
	 *@param decimal $param Precio del Articulo
	 */
	 public function SetPrice($param){
		$this->Price = $param;
	}
	
	
	/**
	 *Setea el valor del campo Descripcion
	 *
	 *@acces public
	 *@param text $param Descripción  del Articulo
	 */
	 public function SetDescripcion($param){
		$this->Descripcion = $param;
	}
	
	/**
	 *Setea el valor del campo Imagen
	 *
	 *@acces public
	 *@param varchar $param Imagen del Articulo
	 */
	 public function SetImage($param){
		$this->Image = $param;
	}
    
    /**
	 *Setea el valor del campo Cantidad
	 *
	 *@acces public
	 *@param int $param Cantidad de Articulos disponibles
	 */
	 public function SetCantidad($param){
		$this->Cantidad = $param;
	}
	
//-----------------------------------------------------------------------------------------------------------------------------------
//																Funciones Get
//-----------------------------------------------------------------------------------------------------------------------------------
	

	/**
	 *Devuelve el valor del campo id
	 *
	 *@acces public
	 *@return int unsigned Id del Articulo
	 */
	 public function GetId(){
		return $this->id;
	}
	
	
	/**
	 *Devuelve el valor del campo Title
	 *
	 *@acces public
	 *@return varchar Nombre del Articulo
	 */
	 public function GetTitle(){
		return $this->Title;
	}
	
	/**
	 *Devuelve el valor del campo Price
	 *
	 *@acces public
	 *@return decimal Precio del Articulo
	 */
	 public function GetPrice(){
		return $this->Price;
	}
	

	/**
	 *Devuelve el valor del campo Descripcion
	 *
	 *@acces public
	 *@return text Descripción  del Articulo
	 */
	 public function GetDescripcion(){
		return $this->Descripcion;
	}
	
	/**
	 *Devuelve el valor del campo Image
	 *
	 *@acces public
	 *@return varchar Imagen del Articulo
	 */
	 public function GetImage(){
		return $this->Image;
	}

    /**
	 *Devuelve el valor del campo Cantidad
	 *
	 *@acces public
	 *@return varchar Cantidad de Articulos disponibles
	 */
	 public function GetCantidad(){
		return $this->Cantidad;
	}
	
	
	
}

//Fin de la clase
?>
