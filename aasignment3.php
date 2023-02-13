<?php

//1. Write a Reusable  PHP Function that can check Even & Odd Number And Return Decision
function isEven($n){
    if ($n % 2 == 0){
        return true;
    }
    return false;
}

$number = 75;
if (isEven($number)){
    echo "{$number} is an even number";
}else{
    echo "{$number} is an odd number";
}
echo PHP_EOL;

//2. 1+2+3...…….100  Write a loop to calculate the summation of the series
$startNum = 1;
$endNum = 100;
$sum = 0;
for($i = $startNum; $i <= $endNum; $i++){
  $sum = $sum + $i;
}
echo "Summation of the given series is {$sum}";
echo PHP_EOL;

?>