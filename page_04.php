<?php
session_start();

print $_SESSION["fname"];

if(isset($_SESSION["fname"])){

    unset($_SESSION["fname"]);//removes the session from the system

    header("Location: page_03.php");
    exit();
}
?>
