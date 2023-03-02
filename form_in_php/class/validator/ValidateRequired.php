<?php
/**
 * -Preservare il valore iniziale valido del campo di testo
 * -Visualizzare il messaggio di errore per il singolo campo
 *  - sapere se c'è un errore **is valid()**
 *  - ripulire e controllare i valori (sicurezza)
 *  - ogni validazione ha il suo messaggio di errore
 *  - impostare la classe di bootstrap is-invalid
 */

class ValidateRequired implements Validable
{


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
