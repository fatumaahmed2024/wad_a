<form action="" method="post">
    <input type="text" name="fname" id=""><br>
    <input type="submit" name="Create" value="Create">
</form>

<?php
session_start();

if(isset($_POST["Create"])){
    $_SESSION["fname"] = $_POST["fname"];

print $_SESSION["fname"];

print '<br><a href ="page_02.php">Go to Page 02</a>';
}
?>
