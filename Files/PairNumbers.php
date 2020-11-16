<!-- Calcula los Pares de un rango del 1 al 100 -->
<?php

// function to use as anonymous
function isEven($val)
{
    return $val % 2 == 0;
};

function filterRange($firstVal, $secondVal)
{
    $rango = range($firstVal, $secondVal);


    return array_filter(
        $rango,
        "isEven"
    );
}
?>