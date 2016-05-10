<?php

$wsclient = new WSClient( array(
                "wsdl" => "HelloWorld.wsdl",
                "to" => "https://wd2.doktuz.com/dok-webservice/wsdl_server,php"));

$proxy = $wsclient->getProxy();

$ret_val = $proxy->HelloWorld(array("$msg" => "Hola Mundo");

print_r($ret_val);

//$client = new SoapClient("http://local.doktuz.app/dok-webservice/wsdl_server_paciente.php?wsdl");
//$result = $client->myFirstRequest(array("msg" => "Hola mundo"));
//$result = $soapclient->call( 'myFirstRequest' , array("msg" => "dasdasda") );

/*require_once "lib/nusoap.php";

$client = new nusoap_client("http://local.doktuz.app/dok-webservice/wsdl_server_paciente.php");

$error = $client->getError();
if ($error) {
    echo "<h2>Constructor error</h2><pre>" . $error . "</pre>";
}

$result = $client->call("getInfo", array("profile" => "1"));

if ($client->fault) {
    echo "<h2>Fault</h2><pre>";
    print_r($result);
    echo "</pre>";
}
else {
    $error = $client->getError();
    if ($error) {
        echo "<h2>Error</h2><pre>" . $error . "</pre>";
    }
    else {
        echo "<h2>Books</h2><pre>";
        echo $result;
        echo "</pre>";
    }
}*/
