<?php
require "./config.php";
require "./form_in_php/class/validator/Registry/it/Regione.php";
//$regioni = new Regioni();
//$regioni->all(); //Array di (stdClass) regioni

//Metodo statico
$regioni = Regione::all();

print_r($regioni);
// php form_in_php/test/test_regioni.php