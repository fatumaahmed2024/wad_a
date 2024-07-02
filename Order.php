<?php
 require_once("Includes/db_connect.php"); 
 include_once ("templates/heading.php");   
require_once ("templates/nav.php"); 

if(isset($_POST["place_order"])){
    $fn=$_POST["fullname"];
    $number=$_POST["number"];
    $mail=$_POST["email"];
    $message=$_POST["order_message"];
    $subject=$_POST["Destination"];
    
    $insert_message = "INSERT INTO messages (sender_name, sender_phone_number, sender_email,text_message,Destination)
    VALUES ('$fn','$number','$mail', '$message', '$subject')";
    
    if ($conn->query($insert_message) === TRUE) {
  header("Location: order.php");
  exit();
    } else {
      echo "Error: " . $insert_message . "<br>" . $conn->error;
    }
    }
?>
   
         <div class="banner">
            <h1> Place Order</h1>
           </div>
           <div class="row">
               <div class="content">
                <h1>Place Your Order</h1>
               </div>

    <form action="<?php print htmlspecialchars($_SERVER["PHP_SELF"]) ; ?>"
    method= "post" class="order_form"><br>

        
        <label for="fn">Fullname:</label><br>
        <input type="text" id="fn"
        placeholder="Fullname" name="fullname"
        required><br><br>

        <label for="num">Phone Number:</label><br>
        <input type="text" id="num"
        placeholder="Phone Number"name="number"
        required><br><br>

        <label for="em">Email:</label><br>
        <input type="email" id="em"
        placeholder="Email" name="email"
        required><br><br>

        
       <label for="Order">Order Message:</label><br>
        <textarea name="order_message" 
        id="Order from menu" cols="30" rows="10" required></textarea>

        <br>
        <br>
        <select name="Destination" id="dn"required>
        <option value="">--Select Destination--</option>
        <option value=""> South C</option>
        <option value="">South B</option>
        <option value="">Eastleigh</option>
        <option value="">Parklands</option>
        <option value="">Town</option>

    </select>
<br><br>
        <input type="Submit" name="place_order"value="Place order">
        
    </form>
                  
<?php include_once("templates/footer.php")?>