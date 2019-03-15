<?php 
$n=20;
$m=[];

function index($n,$m)
{
	$m['0']=1;
	$m['1']=1;

	for ($i=2; $i <=$n ; $i++) { 
		 $m[$i]=$m[$i-1]+$m[$i-2];
	}
	return $m[$n-1];

}
print_r(index($n,$m));
// function index($n)
// {
// 	if ($n ==1 || $n==2) {
// 		return 1;
// 	}else{
// 	return $n=index($n-1)+index($n-2);
// 	}
// }
//print_r(index(20));
?>