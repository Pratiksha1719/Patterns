<?php 
/*

*
* *
* * *
* * * *
* * * * *
* * * * * *

*/
$row = 4;
$col = 4;
for($i = 0; $i < $row ; $i++){
    for($j = 0; $j < $col ; $j++){
        if($j <= $i){
            echo " * ";
        }
    }
    echo "\n";
}
?>
