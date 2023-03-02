<?php

class ValidateMail implements Validable {


    public function isValid(mixed $email) : bool {
        // $strip_tag = strip_tags($value);
        // $valueWithoutSpace = trim($strip_tag);
        return filter_var($email,FILTER_VALIDATE_EMAIL);
    }


}