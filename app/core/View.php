<?php


// 13 de Abril del 2014
// View.php
// @brief Una vista corresponde a cada componente visual dentro de un modulo.

class View {
	public static $content;
	public static $params;
	/**
	* @function load
	* @brief la funcion load carga una vista correspondiente a un modulo
	**/	
	public static function render($cntrllr,$view,$data=[]){
		// Module::$module;
		self::$content = "";
		if(!isset($_GET['view'])){
			self::$content= "app/views/".$view."/widget-default.php";
		}else{


			if(View::isValid()){
			self::$content= "app/views/".$view."/widget-default.php";
			}else{
				View::Error("<b>404 NOT FOUND</b> View <b>".$view."</b> folder  !!");
			}
		}

		if($cntrllr->default_layout!=""){
			include "app/layouts/".$cntrllr->default_layout.".php";
		}


	}

	/**
	* @function isValid
	* @brief valida la existencia de una vista
	**/	
	public static function isValid(){
		$valid=false;
		if(isset($_GET["view"])){
			if(file_exists($file = "core/modules/".Module::$module."/view/".$_GET['view']."/widget-default.php")){
				$valid = true;
			}
		}
		return $valid;
	}

	public static function Error($message){
		print $message;
	}

}



?>