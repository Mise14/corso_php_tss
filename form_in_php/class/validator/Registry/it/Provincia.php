<?php

class Provincia{

    public static function all()
    {
        try {
            $conn = new PDO(DB_DSN,DB_USER,DB_PASSWORD);
            $stm = $conn->prepare('SELECT * FROM provincia;');
            //esegue la query
            $stm->execute();
            //ottengo il risultato e lo trasformo con fetchAll in array
            $result = $stm->fetchAll(PDO::FETCH_OBJ);
            return $result;
        } catch (\PDOException $th) {
            throw $th;
        }
    }






}