<?php
session_start();

print $_SESSION["fname"];

if(isset($_SESSION["fname"])){

   

    header("Location: page_03.php");
    exit();
}
?>
