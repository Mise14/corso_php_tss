<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        $nome = "Mario";
        $eta = 50;
        $passatempi = array("Tennis","Cinema","no sport");

        function saluta($nome){
            return "Ciao io sono $nome, come va?";
        }

        echo "<h1> scrivo un contenuto sullo schermo </h1>";
        /* richiamo la funzione con il comando echo */
        echo saluta("Gianni");
        /*per andare a capo posso creare un paragrafo*/
        echo "<p>" .saluta($nome). "</p>";

        //in js avrei scritto passatempi.length, in php no, uso count che conta quanti elementi ci sono nell'array
        echo "<ul>";
        for ($i=0; $i < count($passatempi) ; $i++) { 
           echo "<li> $passatempi[$i] </li>";
        }
        echo "</ul>";
    ?>

</body>
</html>