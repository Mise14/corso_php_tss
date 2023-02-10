<?php
$first_name = filter_input(INPUT_POST,'first_name');


//se compilato restituisce una stringa 
//se non compilato -> stringa vuota
//se compilato con spazi -> stringa di spazi
//valore null se non passo dal form
var_dump($first_name);

?>