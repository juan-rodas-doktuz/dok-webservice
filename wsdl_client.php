<?php
error_reporting(E_ALL);

ini_set('display_errors', 1);

require_once("lib/nusoap.php");

$client = new nusoap_client("https://wd2.doktuz.com/dok-webservice/wsdl_server.php");

$error = $client->getError();
if ($error) {
    echo "<h2>Constructor error</h2><pre>" . $error . "</pre>";
}

// Get our posted data if the service is being consumed
 // otherwise leave this data blank.
 $POST_DATA = isset($GLOBALS['HTTP_RAW_POST_DATA']) ? $GLOBALS['HTTP_RAW_POST_DATA'] : '';

 // pass our posted data (or nothing) to the soap service
 $server->service($POST_DATA);

return $result;
