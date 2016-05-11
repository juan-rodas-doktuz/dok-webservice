<?php
require_once("lib/nusoap.php");

$namespace = "https://wd2.doktuz.com/dok-webservice/wsdl_server.php";

function HelloWorld($msg) {

    return json_encode(array("msg" => $msg), true);

}

  $server = new soap_server();

  // Configure our WSDL
  $server->configureWSDL("HelloWorld", "urn:HelloWorld");

  // Registrar Servicio
  $server->register("HelloWorld",
    array("msg" => "xsd:string"),
    array("return" => "xsd:string"),
    "urn:HelloWorld",
    "urn:HelloWorld#HelloWorld",
    "rpc",
    "encoded",
    "Nos da una lista de productos de cada categoría"
  );

// Get our posted data if the service is being consumed
   // otherwise leave this data blank.
   $POST_DATA = isset($GLOBALS['HTTP_RAW_POST_DATA']) ? $GLOBALS['HTTP_RAW_POST_DATA'] : '';

   // pass our posted data (or nothing) to the soap service
   $server->service($POST_DATA);

exit();
