<?php 
$n = 5;
function Sum_Solution($n){
$sum=$n;

  $sum && $sum+=Sum_Solution($n-1);
return $sum;
}

print_r(Sum_Solution($n));
 ?>