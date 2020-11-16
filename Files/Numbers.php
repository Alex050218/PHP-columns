<?php

include_once("PairNumbers.php");
include_once("Printing.php");

// gettin the even values
$list = filterRange(1, 100);

// [1,2] => ["1 <br>", "2 <br>"]
$DIV_data = array_map("addBR", $list);

$columns = 5;
$listSize = count($DIV_data);

// listSize = 50, columns = 5 => 50/5 => 10 elements by column
$DIV_elements = round($listSize / $columns);

for ($currVals = 0; $currVals < $listSize; $currVals += $DIV_elements) {
    echo createColumn(

        // slices the amount of data given by the past division
        array_slice($DIV_data, $currVals, $DIV_elements)
    );
}
