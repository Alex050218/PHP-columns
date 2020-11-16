<?php

function addBR($str)
{
    return "$str <br>";
};

function createColumn($values, $margin = 20)
{

    echo "<div style=\"margin:" . $margin . "px;\">";
    echo implode("", $values); // [1 <br>,2 <br>] => "1<br> 2<br>"
    echo "</div>";
};
