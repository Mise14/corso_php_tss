<?php
/**
 * - [x] Preservare il valore iniziale valido del campo di testo
 * -Visualizzare il messaggio di errore per il singolo campo
 *  - [x]sapere se c'è un errore **is valid()**
 *  - [x]ripulire e controllare i valori (sicurezza)
 *  - ogni validazione ha il suo messaggio di errore
 *  - impostare la classe di bootstrap is-invalid
 */

class ValidateRequired implements Validable
{
    /** @var string rappresenta il valore immesso nel form ripulito */
    private $value;
    private $message;
    private $hasMessage;
    /** se il valore è valido e se devo visualizzare il messaggio */
    private $valid;

    //Assegno una stringa vuota al form in GET
    public function __construct($default_velue='',$message='è obbligatorio') {
        $this->value = $default_velue;
        $this->valid = true;
        $this->message = $message;
    }

    public function isValid($value)
    {
        $strip_tag = strip_tags($value);
        $valueWithoutSpace = trim($strip_tag);

        //se inserisco una stringa con soli spazi, e con trim mi ritorna una stringa vuota -> ritorna false
        if($valueWithoutSpace == ''){
            $this->valid = false;
            return false;
        }
        $this->valid=true;
        $this->value = $valueWithoutSpace;
        return $valueWithoutSpace;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function getValid()
    {
        return $this->valid;
    }


}
