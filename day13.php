<?php 
function Add($num1,$num2){
while ($num2!=0) {
 $temp=$num1 ^ $num2;
  $num2=($num1 & $num2)>>2;
  $num1=$temp;
}
return $num1=$temp.$num2;
}
echo Add(5,5);
 ?>