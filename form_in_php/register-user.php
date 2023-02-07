<?php

$name = filter_input(INPUT_GET,'first_name');
$lastName = filter_input(INPUT_GET,'last_name');
$birthday = filter_input(INPUT_GET,'birthday');
$birthPlace = filter_input(INPUT_GET,'birth_place');
$gender = filter_input(INPUT_GET,'gender');
$username = filter_input(INPUT_GET,'username');
$password = filter_input(INPUT_GET,'password');


print_r('Nome: '.$name.' Cognome: '.$lastName.' Data: '.$birthday.' Luogo nascita '.$birthPlace.' Sesso: '.$gender.' Username: '.$username.' Password: '.$password);

?>