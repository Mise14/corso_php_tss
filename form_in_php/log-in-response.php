<?php

$test = filter_input(INPUT_GET,'email',FILTER_VALIDATE_EMAIL);

if($test === false){
    echo "\nla mail non è valida\n";
} else {
    echo "Grazie, la tua email è valida: $test";
}

?>