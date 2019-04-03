<?php 
function CountSteps($x,$y) 
{
  if ($x==1 || $y==1) {
  	return 2;
  }else{
  	$reg=CountSteps($x-1,$y)+CountSteps($x,$y-1);
  }
return $reg;

}
print_r(CountSteps(2,5) );

 ?>