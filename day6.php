<?php
function calFn($n,$m){
	$sum=0;
for ($i=$n; $i<=$m; $i++) { 
	$count=substr_count($i,1);
	$sum+=$count;
 }
 return $sum;
}
echo calFn(1,13);
 ?>