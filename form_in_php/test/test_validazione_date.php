<?php

// $files = scandir("./form_in_php/class/validator");

require "/xampp/htdocs/corso_php_tss/form_in_php/class/validator/Validable.php";
require "/xampp/htdocs/corso_php_tss/form_in_php/class/validator/ValidateDate.php";


$testCases = [
    [
        'input' => '           ',
        'expected' => false
     ],
     [
        'input' => '20#01#1990',
        'expected' => false
     ],
     [
        'input' => '1/02/1190',
        'expected' => false
     ],
     [
        'input' => '',
        'expected' => false
     ],
     [
        'input' => '31-01-1990',
        'expected' => false
     ],
     [
        'input' => '20.01.1990',
        'expected' => false
     ],
     [
        'input' => '20-1-19999',
        'expected' => false
     ],
     [
        'input' => '31/01/1990',
        'expected' => true
     ]
     ];


foreach ($testCases as $key => $test){
    $input = $test['input'];
    $expected = $test['expected'];

    $v = new ValidateDate();

   if($v -> isValid($input) != $expected){
        echo "\nTest non superato mi aspettavo:";
        var_dump($expected);
        echo "\nma ho trovato:";
        var_dump($v->isValid($input));
   };
}
