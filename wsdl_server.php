<?php
require_once "lib/nusoap.php";

function HelloWorld($msg) {

    return json_encode(array("servicio" => $msg ));

}

$server = new soap_server();
$server->register("HelloWorld");
$server->service($HTTP_RAW_POST_DATA);
