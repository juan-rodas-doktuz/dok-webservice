<?php
header('Content-Type: application/json');
class Api {

    // Función sin parametros
    function HolaMundo() {
        return "Hello";
    }

    // Función con parametros
    function HolaMundoParams($nombre, $apellidos){
      $return = array("nombre" => $nombre, "apellidos" => $apellidos);
      return json_encode($return);
    }

}

//when in non-wsdl mode the uri option must be specified
$options=array('uri'=>'https://wd2.doktuz.com/dok-webservice/');
//create a new SOAP server
$server = new SoapServer(NULL,$options);
//attach the API class to the SOAP Server
$server->setClass('Api');
//start the SOAP requests handler
$server->handle();
