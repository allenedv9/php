<?php
if(isset($_COOKIE['nom'])){
    
    setcookie("nom","",time()-1);
    echo "Se a borrado la cookie, <a href='arbolen2.php'>Vuelve a la página principal</a>";
}else{

    if(isset($_COOKIE['nombre'])){
    setcookie("nombre","",time()-1);
    echo "Se a borrado la cookie, <a href='arbol.php'>Vuelve a la página principal</a>";

    }
}
?>