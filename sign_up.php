<?php 
require_once("Includes/db_connect.php");
include_once("templates/heading.php");
 include_once("templates/nav.php");
    
 
          

if(isset($_POST["signup"])){
    $fn =mysqli_real_escape_string($conn, $_POST ["fullname"]);
    $mail =mysqli_real_escape_string($conn, $_POST["email_address"]);
    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $pass = mysqli_real_escape_string($conn,$_POST["passphrase"]);
    $age =mysqli_real_escape_string($conn, $_POST["age"]);
    $gender=mysqli_real_escape_string($conn, $_POST["gender"]);
   
//verify that the fullname contains only letters, space and a single quote

//verify that the email has the correct format
if(!filter_var($mail, FILTER_VALIDATE_EMAIL)){
    $_SESSION["wrong_email_format"]="wrong email format";
    $_SESSION["error"]="";
    
}
//verify that the email domain is authorized(gmail.com,yahoo.com etc)

//verify that the email address does not exist in the database

//verify that the username does not exist in the database

//verify that the password is identical to the repeat password

//verify that the password length is between 4 and 8 characters

if(!isset($_SESSION["error"])){
    $insert_message="INSERT INTO users ( fullname, pass, email , gender, age, username) VALUES
    ( '$fn','$pass', '$mail', '$gender' ,$age,'$username')";

        if($conn->query( $insert_message)=== TRUE){
        //  echo "New record created successfully";
        header("Location: index.php");
        exit();

        }else{
            echo "Error; ". $insert_message."<br>".$conn->error;
        }

}
}
?>
    
    
    
