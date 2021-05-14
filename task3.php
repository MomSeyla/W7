<?php
function sum(...$num)
{
    $result = 0;
    foreach ($num as $i) {
        $result += $i;
    }
    return $result;
}
echo $total = "sum = " . sum(2, 3) . "\n";
echo $total = "sum = " . sum(2, 3, 4) . "\n";
echo $total = "sum = " . sum(2, 3, 4, 5) . "\n";
