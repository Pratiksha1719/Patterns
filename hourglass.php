<?php
/*

*  *  *  *  * 
   *     *
      *
   *     *
*  *  *  *  *

*/

for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < 5; $j++) {
        if ($i == 0 || $i == 4) {
            echo " * ";
        } else {
            if ($j == $i || $j + $i == 4) {
                echo " * ";
            } else {
                echo "   ";
            }
        }
    }
    echo "\n";
}

?>
