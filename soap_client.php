<?php

$options = array('location' => 'https://wd2.doktuz.com/dok-webservice/soap_server.php', 'uri' => 'https://wd2.doktuz.com');
//create an instante of the SOAPClient (the API will be available)
$api = new SoapClient(NULL, $options);
//call an API method
echo $api->HolaMundoParams("Juan", "Rodas");
