<?php


	// Metodo Principal
	function build($p_string){

		$newCadena = "";
		$long_pstring = strlen($p_string);

		 for ($i=0; $i < $long_pstring; $i++) { 

		 	$newCadena = $newCadena . reemplazarCaracter($p_string[$i]);		 
		}
	        	
	  	return $newCadena;

	}


	// Metodo para reemplazar un caracter por su consecutivo en codigo ASCII DECIMAL
	function reemplazarCaracter($p_char){	

	 		$result_char = "";

	 		// Verifica que el caracter convertido a ascii-decimal pertenezca al intervalo de caracteres "ABCD..Y" ó "abcd..y"
	 		if((ord($p_char) > 64 && ord($p_char) < 90) || (ord($p_char) > 96 && ord($p_char) < 122)){			
		 			$result_char = chr(ord($p_char)+1);	
		 	}
		 	else{
		 	 	if(ord($p_char) == 90) // Verifica si es el caracter Z
		 	 		$result_char = 'A';
		 	 	else if(ord($p_char) == 122) // Verifica si es el caracter z
		 	 		$result_char = 'a';
		 	 	else if(ord($p_char) == 195) // Verifica si es el caracter ñ
		 	 		$result_char = 'o';			
		 	 	else
		 	 		$result_char = $p_char;		 			 	 		
		 	}

		return $result_char;
	}



// Pruebas

 echo "entrada : **Casa 52Z" . "\n";

 echo " salida :" . build("**Casa 52Z");

?>


