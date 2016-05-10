<?php
require_once "lib/nusoap.php";

function HelloWorld($msg) {

    return $msg;
    /*if ($msg == "1") {
        return 'Hola1';//json_encode(array("msg" => "Información de paciente"));
	} else if ($msg == "2") {
        return 'Hola2';//json_encode(array("msg" => "Información de médicos"));
	} else if ($msg == "3") {
        return 'Hola3';//json_encode(array("msg" => "Información de instituciones"));
	} else {
        return 'Hola4';//json_encode(array("msg" => "Error de comunicación"));
	}*/
}


$server = new soap_server();
$server->register("HelloWorld");
$server->service($HTTP_RAW_POST_DATA);
