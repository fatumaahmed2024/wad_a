<?php
 require_once("Includes/db_connect.php"); 
 include_once ("templates/heading.php");   
require_once ("templates/nav.php"); 

$messageId=$_GET["messageId"];

$spot_msg = "SELECT * FROM `messages` WHERE messageId ='$messageId' LIMIT 1";
$spot_msg_res = $conn->query($spot_msg);

$spot_msg_row = $spot_msg_res->fetch_assoc();












if(isset($_POST["update_message"])){
    $fn=$_POST["fullname"];
    $number=$_POST["number"];
    $mail=$_POST["email"];
    $message=$_POST["order_message"];
    $subject=$_POST["Destination"];
    
    $insert_message = "INSERT INTO messages (sender_name, sender_phone_number, sender_email,text_message,Destination)
    VALUES ('$fn','$number','$mail', '$message', '$subject')";
    
    if ($conn->query($insert_message) === TRUE) {
  header("Location: view_messages.php");
  exit();
    } else {
      echo "Error: " . $insert_message . "<br>" . $conn->error;
    }
    }
?>
   
         <div class="banner">
            <h1> Update Message</h1>
           </div>
           
                <h1>Update Message</h1>
               

    <form action="<?php print htmlspecialchars($_SERVER["PHP_SELF"]) ; ?>"
    method= "post" class="order_form"><br>

        
        <label for="fn">Fullname:</label><br>
        <input type="text" id="fn"
        placeholder="Fullname" name="fullname"
        required value="<?php print $spot_msg_row["sender_name"];?>"><br><br>

        <label for="num">Phone Number:</label><br>
        <input type="text" id="num"
        placeholder="Phone Number"name="number"
        required value="<?php print $spot_msg_row["sender_phone_number"];?>"><br><br>

        <label for="em">Email:</label><br>
        <input type="email" id="em"
        placeholder="Email" name="email"
        required value="<?php print $spot_msg_row["sender_email"];?>"><br><br>

        
       <label for="Order">Order Message:</label><br>
        <textarea name="order_message" 
        id="Order from menu" cols="30" rows="10" required><?php print $spot_msg_row["text_message"];?></textarea>

        <br>
        <br>
        <select name="Destination" id="dn"required>
        <option value="<?php print $spot_msg_row["Destination"];?>"><?php print $spot_msg_row["Destination"];?></option>
        <option value="South C"> South C</option>
        <option value="South B">South B</option>
        <option value="Eastleigh">Eastleigh</option>
        <option value="Parklands">Parklands</option>
        <option value="Town">Town</option>

    </select>
<br><br>
        <input type="submit" name="update_message"value="Update Message">
        <input type="hidden" name="messageId"value="<?php print $spot_msg_row["messageId"];?>">
        
    </form>
                  
<?php include_once("templates/footer.php")?>