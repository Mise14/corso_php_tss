<?php

// $files = scandir("./form_in_php/class/validator");

require "/xampp/htdocs/corso_php_tss/form_in_php/class/validator/ValidateRequired.php";
/*
/*primi due valori sono vuoti 3-4 dovrebbe risp non superato 
$datas = ['', "", '    ', '<h1></h1>', '<p> </p>', 'ciao', 'numero', ''];
 

$v = new ValidateRequired();

 $v->isEmpty($datas);
*/  
    
//definitivo -> validaterequired campo obbligatorio che non deve essere vuoto:
 $testCases = [
 [
    'input' => '           ',
    'expected' => false
 ],
 [
    'input' => 'ciao    ',
    'expected' => 'ciao'
 ],
 [
    'input' => '  ciao  ',
    'expected' => 'ciao'
 ],
 [
    'input' => '   ciao',
    'expected' => 'ciao'
 ],
 [
    'input' => '',
    'expected' => false
 ],
 [
    'input' => '<h1>ciao</h1>',
    'expected' => 'ciao'
 ],    
 [
    'input' => '<b>ciao</b>',
    'expected' => 'ciao'
 ], 
 [
    'input' => '<b>   </b>',
    'expected' => false
 ],  
 [
    'input' => '<b></b>',
    'expected' => false
 ]           
];    
     
   foreach ($testCases as $key => $test){
    $input = $test['input'];
    $expected = $test['expected'];

    $v = new ValidateRequired();

   if($v -> isValid($input) != $expected){
        echo "\nTest non superato mi aspettavo:";
        var_dump($expected);
        echo "\nma ho trovato:";
        var_dump($v->isValid($input));
   };
    //print_r($test['input']);
   }
    
