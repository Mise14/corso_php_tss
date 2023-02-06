
<?php

    $nome = "Mario";

    echo "ciao $nome \n";
    //usare l'apice singolo non riconosce la variabile
    echo 'ciao $nome \n';




    //$colori = array();
    $colori = ['red',"green","blue"];

    echo "\n".$colori[2]."\n";

    #associative Array (HashMap)
    $persona = [
        "nome" => "Mario",
        "cognome" => "Rossi",
        "email" => "a@b.it"
    ];

    print_r($persona);

    echo $persona['email']."\n\n";
    //echo $persona -> dà errore Array to string conversion

    $classe = array(
        [
            "nome" => "Mario",
            "cognome" => "Rossi",
            "email" => "a@b.it"
        ],
        [
            "nome" => "Giovanni",
            "cognome" => "Verdi",
            "email" => "c@d.it"
        ]
        );

    print_r($classe[1]['cognome']);
    echo "\n";
    echo "-----------IMPERATIVO---------------\n";

    #ciclo imperativo
    for ($i=0; $i < count($classe) ; $i++) { 
        $allievo = $classe[$i];
        echo $allievo['nome']."\n";
    }

    echo "-----------FOREACH LOOP-----------------\n";

    #foreach
    foreach ($classe as $i => $allievo) {
        echo ($i+1).")".$allievo['nome'];
        echo "\n";
    }

    echo "-----------MAP ARRAY-----------------\n";
    //non è un ciclo
    function stampaNome($allievo){
        echo $allievo['nome']."\n";
    }

    array_map('stampaNome',$classe);
?>