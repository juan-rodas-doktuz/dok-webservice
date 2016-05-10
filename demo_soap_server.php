<?php

class Api {

    function HolaMundo() {
        return "Hello";
    }

}

//when in non-wsdl mode the uri option must be specified
$options=array('uri'=>'http://local.doktuz.app/dok-webservice/');
//create a new SOAP server
$server = new SoapServer(NULL,$options);
//attach the API class to the SOAP Server
$server->setClass('Api');
//start the SOAP requests handler
$server->handle();
