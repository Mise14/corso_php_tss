<?php
include "config.php";
//apro il file json
$province_string = file_get_contents('province.json');
//lo trasformo in oggetto
$province_object = json_decode($province_string);
//trasformo il mio array, in un altro solo con quello che mi serve
$province_array = array_map(function($provincia){
    return $provincia->nome;
},$province_object);
//sort($province_array);

$sigla_array = array_map(function($sigla){
    return $sigla->sigla;
},$province_object);
//sort($sigla_array);




print_r($province_array);
print_r($sigla_array);