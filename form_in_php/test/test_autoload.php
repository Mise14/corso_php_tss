<?php

use validator\ValidateDate;
use validator\ValidateMail;
use validator\ValidateRequired;
use Registry\it\Provincia;
use Registry\it\Regione;

require ("./config.php");

spl_autoload_register(function($className){

    echo "\n sto cercando $className\n";
    $className = str_replace("\\","/",$className);
    require "./form_in_php/class/".$className.".php";
});

new ValidateMail();
new ValidateDate();
new ValidateRequired();

Regione::all();
Provincia::all();