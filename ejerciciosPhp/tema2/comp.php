<?php 

 $a;
 $b;
function &f1(){
 global $a;
$a=9;
return $a;

}
$val1=&f1();
echo $val1;
$a++;
echo "<br />";
echo $val1;
echo "<br />";
 echo "***** retorno por valor *******";
 echo "<br />";
 
 function f2(){
  global $b;
  $b=9;
 
return $b;
}
$val2=f2();
echo $val2;
$b++;
echo "<br />";
echo $val2;


 ?>