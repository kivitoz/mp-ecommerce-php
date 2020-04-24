<?php


/**
*Clase Global Abstracta
*
*Funciones generales para utilizar en el sistema
*

*@uses DataList
*@acces public
*@author Sebastián Gañán
*@version 20.04.24
*/

class GLOBALS{


	//---------------	NUMEROS    ------------------------//

    /**
     *Devuelve el número con el formato para Argentina
     *
     *@acces public
     *@param $Numero Número a formatear
     *@return String Número formateado
     */
    public static function FormatoNumero($Numero, $Decimales = 2){
		if(is_numeric($Numero)){
	        return number_format($Numero, $Decimales, ",", ".");
		}else{
			return $Numero;
		}
	}
	
	
    /**
     *Devuelve el número con el formato para Moneda Argentina
     *
     *@acces public
     *@param $Numero Número a formatear
     *@return String Número formateado
     */
    public static function FormatoMoneda($Numero, $Decimales = 2){
		if($Numero == ""){
			return "0,00";
		}
		if(is_numeric($Numero)){
	        return number_format($Numero, $Decimales, ",", ".");
		}else{
			return str_replace(",",".",str_replace("$", "", str_replace(".", "", $Numero)));
		}
    }
	

	//---------------	TEXTO    ------------------------//

	/**
     * Saca caracteres raros y espacios de un string
     *
     * @acces private
     * @param string $string cadena a modificar los caracteres
     * @return string Cadena sin caracteres raros y espacios
     */
    public static function Normalize($string) {
        $string = utf8_decode($string);
		return  preg_replace('/[^a-zA-Z0-9_.-]/', '', $string);

    }

/**---------------VALIDATE----------------------**/

	/**
	*Devuelve true si es un e-mail valido
	*
	*@acces public
	*@param string $Valor E-Mail a analizar
	*@return boolean true si es un e-mail
	*/
	public static function EsEmail($Valor){
		if ($Valor!=""){
			if (filter_var($Valor, FILTER_VALIDATE_EMAIL)) {
				return true;
			}else{
				return false;
			}
		}else{
			return true;
		}
	}




}

?>
