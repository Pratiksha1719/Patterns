<?php

/*

 *              *
 *  *        *  *
 *  *  *  *  *  *
 *  *        *  *
 *              *
 
*/

$n = 3;
$row = ($n * 2) - 1;
$col = $n * 2;

for ($i = 0; $i < $row; $i++) {
    for ($j = 0; $j < $col; $j++) {
        if ($i < $n) {
            if ($j <= $i || $j+ $i >= $row) {
                echo " * ";
            } else {
                
                echo "   ";
            }
        } else { 
            if ($j <= $row - $i - 1 || $j > $i) {
                echo " * ";
            } else {
                echo "   ";
            }
        }
    }
    echo "\n";
}
?>
