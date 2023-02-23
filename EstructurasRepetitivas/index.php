<?php
    echo "<h1> <i> Uso de estructuras repetitivas </i> <br> </h1>";
    $x=1;
    $base = 2;
    $exp = 5;
    $resultado = 1;

    // while ($x <= 10) {
    //     echo "<h1>Repetición $x <br></h1>";
    //     $x++;
    //     echo "Puro campeón";
    // }
    // echo "<h1>Sali del ciclo while <br></h1>";

    # Cuando queremos que se reallice la operración al menos una vez;
    // do {
    //     echo "<h1>Repetición $x <br></h1>";
    // } while ($x < 1);

    #                                   Resultado de elevar 2 a la 5

    while ( $x <= $exp ) {
        $resultado = $resultado * $base;
        $x++;
    }
        echo "el resultado es: $resultado";
    


?>