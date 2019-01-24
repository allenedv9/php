<?php
session_start(); 
$fechahora = "Este es el primer acceso";
$contador = 0;
if (isset($_SESSION['fechahora'])){
    
    $fechahora = $_SESSION['fechahora'];
    if(isset($_SESSION['contador'])){
        $contador = $_SESSION['contador'];
    }
}

date_default_timezone_set('Europe/Paris');

$_SESSION["fechahora"] = date('d/m/Y h:i:s'); // actualiza la variable
$contador++;

$_SESSION["contador"] = $contador; // actualiza la variable 
?>
<HTML>
    <HEAD>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <TITLE>Uso de sesiones en PHP </TITLE>
    </HEAD>
    <BODY>
    <H3>Fecha y hora actual: <?php echo date('d/m/Y h:i:s') ?></H3><BR><B>
    Contenido de la superglobal $_SESSION</B><BR>
    <?php 
    echo "Identificador de la sesión  " . session_id() . "<BR>";
    echo "Nombre de la sesión  " . session_name() . "<BR>";
    echo "Elemento fechahora: " . $_SESSION['fechahora'] . "<BR>" ;
    echo "Elemento contador: " . $_SESSION['contador'] . "<BR><BR>" ;
    echo "<BR>La última vez que accedi󠡠ste a la página fue : $fechahora <BR>"; 
    echo "<BR>Cantidad de accesos a esta página  : $contador <BR>"; 
    if($contador == 6){
       header("Location: ejemplo1_unset.php");
    }
    ?> 
    </BODY>
</HTML>
