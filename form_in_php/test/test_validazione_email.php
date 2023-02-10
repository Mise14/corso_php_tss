<?php

//$files = scandir("./form_in_php/class/validator");
//print_r($files);

//questo comando mi permette di accedere alla classe
require "./form_in_php/class/validator/ValidateMail.php";

//tipi di email sbagliate=
$emails=['a','  ','a@','mario'];

$v = new ValidateMail();

//in java --> v.isValid('a');
//In php si usa la freccia al posto del punto:

foreach($emails as $index => $email){
   
   if ($v -> isValid($email) == false){
    echo "test superato per $email\n";
   }else{
    echo "test numero $index non superato per [$email]\n";
   };
   // $v -> getMessage();
}