<?php
class EnlacesController{

public function enlaces(){


    if(isset($_GET['ruta'])){
        try{
        $url=filter_input(INPUT_GET,'ruta',FILTER_SANITIZE_URL);
        $url=explode('/',$url);
        $url=array_filter($url); 
    
        $enlaces=strtolower(array_shift($url));
   
    }catch(Exception $e){
        $enlaces = "home";	
    }
    }
    else{

        $enlaces = "home";

    }



    $respuesta = EnlacesModels::enlaces($enlaces);

   

 include $respuesta;


}


}