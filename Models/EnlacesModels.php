<?php

class EnlacesModels{ 

	public static function enlaces($enlaces){

		if(!($enlaces))
		{
			$module = "Views/modules/home.php";
			return $module;
		}

	     if(  $enlaces == "home" || $enlaces == "about" ||  $enlaces == "services" || $enlaces == "quote" ){

			$module = "Views/modules/".$enlaces.".php";
		}	
		else if($enlaces == "index"){
			$module = "Views/modules/home.php";
		}
		
		else{
			$module = "Views/modules/home.php";		
		}

		return $module;

	}


}