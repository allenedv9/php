<?php
session_start();
     if($_SESSION['contador'] == 6){
        unset($_SESSION['contador']);
       header("Location: ejemplo1.php");
    }

?>