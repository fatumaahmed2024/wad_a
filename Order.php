<?php
 require_once("Includes/db_connect.php"); 
 include_once ("templates/heading.php");   
require_once ("templates/nav.php"); 


/*$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}*/
?>
   
         <div class="banner">
            <h1> Place Your Order</h1>
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