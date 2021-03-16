<?php 

    $array = array();

    for ($x = 1; $x <= 6; $x++)
    {
        array_push($array, rand(10, 20));
    }

    var_dump ($array);

    function somaArray($arrayprasomar){
        $resultado = "";
        foreach($arrayprasomar as $valor){
            $resultado = $resultado + $valor;
        }
        echo "Soma: ".$resultado;
    }

    somaArray($array);

?>
