<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio Lista/Array</title>
</head>

<body>

    <?php
    /*scrivere una funzione "array2ul()" che dato un array come argomento, restituisce una stringa*/
    /*deve restituire una stringa che rappresenta un elenco <ul> HTML */

    $array2ul = array("Rosso", "Verde", "Bianco");

    function array2ul($array)
    {

        $list = "<ul>";
        for ($i = 0; $i < count($array); $i++) {
            $list .= "<li>$array[$i]</li>";
        }
        $list .= "</ul>";

        return $list;
    }

    echo array2ul($array2ul);

    ?>

</body>

</html>