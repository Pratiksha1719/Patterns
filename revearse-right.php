<?php 
/*

* * * * * * 
* * * * *
* * * *
* * * 
* *
*

*/

$row = 5;
$col = 5;
for($i = 0; $i< $row ; $i++){
    for($j = $col; $j> 0; $j--){
        if($j > $i){
            echo " * ";
        }
    }
    echo "\n";
}
?>
