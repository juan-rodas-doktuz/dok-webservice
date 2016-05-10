<?php
header('Content-Type: application/json');

require_once "lib/nusoap.php";
$client = new nusoap_client("https://wd2.doktuz.com/dok-webservice/wsdl_server.php");

$error = $client->getError();
if ($error) {
    echo "<h2>Constructor error</h2><pre>" . $error . "</pre>";
}

$result = $client->call("HelloWorld", array("msg" => "utilizando Nusoap"));

return $result;
