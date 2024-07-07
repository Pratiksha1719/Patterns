<?php 
/*
pattern: 
     1     
    121
   12321
  1234321
 123454321
12345654321

*/
$n = $row = 6;
$col =($n*2)-1;
$incr = $dcr = 1;
for($i = 0; $i < $row; $i++){
    for($j = 0; $j < $col; $j++){
        if(($j < $n) && ($i+$j) >= $n-1){
            echo $incr;
            $incr++;
        }
        elseif(($j >= $n) && ($j - $i <= $n-1 ) && ($dcr > 0)){
            echo $dcr; 
            $dcr--;
        }else{
            echo " ";
        }
    }
    $dcr = $i+1;
    $incr = 1; 
    echo "\n";
}
?>
