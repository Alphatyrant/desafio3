<?php
        $ar = [];
        for ($i=1; $i <= 20; $i++) { 
            $num = random_int(1, 10);
            array_push($ar, $num);
        }
        
        $repete = max(array_count_values($ar));
        $unicos = array_count_values($ar);

        $valores = array_search($repete ,$unicos);

        $ar = implode(" - ",$ar);
        echo "Array sorteado: $ar \n" ;
        
        echo "O número que mais se repete é o $valores. \n";
        
        echo "Ele se repete $repete vezes \n";
    ?>