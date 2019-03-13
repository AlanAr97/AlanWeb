<?php
//Cookie de sesión.

 class ayudas { 
     
	 private $Desviacion;
	 private $Clave_proyecto;
	 private $Clave_avance;
	 
	function __construct(){  
    $this->Desviacion=""; 
    $this->Clave_proyecto=""; 
    $this->Clave_avance=""; 
} 

function set_desviacion($Desviacion){
		
		 $this->Desviacion=$Desviacion; 
		
	}
	
	function get_desviacion()
	{
	 return $this->Desviacion; 
	}
	
	
	
	function set_clave_proyecto($Clave_proyecto){
		$this->Clave_proyecto=$Clave_proyecto;
		
		
	}
	function get_clave_proyecto(){
	 return $this->Clave_proyecto;
	}
	
	
	function set_clave_avance($Clave_avance){
		$this->Clave_avanceo=$Clave_avance;
	}
	function get_clave_avance(){
	return $this->Clave_avance;
	}
}
?>