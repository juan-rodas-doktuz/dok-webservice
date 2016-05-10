<?php
//require_once "lib/nusoap.php";

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


/* Map of the service operation "ExamResult" to php function "ExamResult" */
$operations = array("HelloWorld" => "HelloWorld");
$opParams   = array("HelloWorld" => "MIXED");

$svr = new WSService(array("wsdl"       => "HelloWorld.wsdl",
                           "operations" => $operations,
                           "opParams"   => $opParams));

/* Reply the client */
$svr->reply();

/*$server = new soap_server();
$server->configureWSDL("wsdl_server_paciente", "urn:wsdl_server_paciente");

$namespace = "http://local.doktuz.app/dok-webservice/wsdl_server_paciente.php";
// Register your function
$server->register("myFirstRequest",      // Register Method
 array('msg' => 'xsd:string'),    // Method Parameter
 array('return' => 'xsd:string'), // Response
 $namespace,                      // Namespace
 false,                           // soapaction: (use default)
 "rpc",                           // style: rpc or document
 "encoded",                       // use: encoded or literal
 "Some Description"               // description: documentation for the method
);

 $POST_DATA = isset($GLOBALS['HTTP_RAW_POST_DATA']) ? $GLOBALS['HTTP_RAW_POST_DATA'] : '';

 @$server->service($POST_DATA);*/
