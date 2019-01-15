<?php
header('Content-Type: text/html; charset=UTF-8');
if ($_REQUEST['radio']=="rojo")
 setcookie("colores","#f8f8f8",time()+60*60*24*365);
elseif ($_REQUEST['radio']=="verde")
setcookie("colores","#eee555",time()+60*60*24*365);
elseif ($_REQUEST['radio']=="azul")
setcookie("colores","#123aaa",time()+60*60*24*365);

?>
<html>
<head>
<title>Problema</title>
</head>
<body>
Se creó la cookie.
<br />
<a href="cookie.php">Ir a la otra página</a>
</body>
</html>
