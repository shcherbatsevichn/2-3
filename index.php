<?php error_reporting(-1);
//В массиве А(N) первый положительный элемент и последний
//отрицательный элемент переставить местами.    
$A = [1, 4 , 6 , 3 , 8, 1, 5, -2, 4 , 7, 22, -9, 6, 3, 8, 7, 13];
echo("<br>1A<br>");
print_r($A);

$pos = 0;
$ppos = 0;
$neg = 0;
$pneg = 0; 
for($n = 0; $n < count($A); $n++){
    if($A[$n] > 0){
        $pos = $A[$n];
        $ppos = $n;
        break;
    }
    
}
for($n = count($A) - 1; $n >= 0; $n-- ){
    if($A[$n] < 0){
        $neg = $A[$n];
        $pneg = $n;
        break;
    }
} 
for($n = 0; $n < count($A); $n++){
    if($n == $ppos){
        $A[$n] = $neg;
    }
    if($n == $pneg){
        $A[$n] = $pos;
    }
}

echo("<br>2A<br>");
print_r($A);
