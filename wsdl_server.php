<?php
require_once("lib/nusoap.php");

$namespace = "https://wd2.doktuz.com/dok-webservice/wsdl_server.php";

function HelloWorld($msg) {

    return "Hola mundo";

}

$server = new soap_server();

// Configure our WSDL
$server->configureWSDL("HelloWorld");

// Registrar Servicio
$server->register(
    // method name:
    'HelloWorld',
    // parameter list:
    array('msg'=>'xsd:string'),
    // return value(s):
    array('return'=>'xsd:string'),
    // namespace:
    $namespace,
    // soapaction: (use default)
    false,
    // style: rpc or document
    'rpc',
    // use: encoded or literal
    'encoded',
    // description: documentation for the method
    'Simple Hello World Method'
);

$server->service($HTTP_RAW_POST_DATA);

exit();
