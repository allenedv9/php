<?php 


function a(){
static $a = 0;
echo $a;
echo "<br>";
	$a++;

}

a();
a();
a();
 ?>