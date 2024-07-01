<?php
/*

*  *  *  *  * 
   *     *
      *
   *     *
*  *  *  *  *

*/

$row = 7;
$col = 7;
for ($i = 0; $i < $row; $i++) {
    for ($j = 0; $j < $col; $j++) {
        if ($i == 0 || $i == $row-1) {
            echo " * ";
        } else {
            if ($j == $i || $j + $i == $row-1) {
                echo " * ";
            } else {
                echo "   ";
            }
        }
    }
    echo "\n";
}

?>
