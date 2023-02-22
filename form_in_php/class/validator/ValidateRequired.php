<?php

class ValidateRequired
{
    /*
    public function isEmpty($data)
    {
        /*empty da 0 (true) se è vuota, 1 (false) se non è vuota 
        foreach ($data as $i => $elementi) {
            if (empty($elementi)) {
                echo "Test NON superato per :[$i] perchè vuoto <br> ";
            } else {
                echo " Test superato per :[$i] perche' pieno <br> ";
            }
        }
    }
    */

    public function isValid($value)
    {
        $valueWithoutSpace = trim(strip_tags($value));

        //se inserisco una stringa con soli spazi, e con trim mi ritorna una stringa vuota -> ritorna false
        if($valueWithoutSpace == ''){
            return false;
        }
        return $valueWithoutSpace;
    }
}
