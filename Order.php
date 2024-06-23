<?php include_once ("templates/heading.php");?>   
    
<?php require_once ("templates/nav.php");?>    
   
         <div class="banner">
            <h1>Order</h1>
           </div>
           <div class="row">
           </div>
               <div class="content">
               </div>

    <form action=""method= "post">
        <label for="fn">Fullname</label><br>
        <input type="text" id="fn"
        placeholder="Fullname"><br><br>

        
        <input type="text" id="Phone Number"
        placeholder="Phone Number"><br><br>

       

        <input type="email" 
        placeholder="Email"><br><br>

        <input type="date" 
        placeholder="deadline"><br><br>

        <input type="time" 
        placeholder="deadline"> <br><br>

        

        
        <input type="checkbox"name=" Delivery"
        id="Delivery"> <label for="Delivery">Delivery</label><br>

        <input type="checkbox"name=" Pickup"
        id="Pickup"> <label for="Pickup">Pickup</label><br>

        <input type="checkbox"name=" M-pesa"
        id="M-pesa"> <label for="M-pesa">M-pesa</label><br>

        <input type="checkbox"name=" Cash"
        id="Cash"> <label for="Cash">Cash</label><br>

        <br>
        <br>
        <p>Type what you would like to order from the menu in the space below here</p>
        <textarea name="" 
        id="Order from menu" cols="30" rows="10"></textarea>

        <br>
        <br>
        <select name="Destination" id="">
        <option value="">--Select Destination--</option>
        <option value=""> South C</option>
        <option value="">South B</option>
        <option value="">Eastleigh</option>
        <option value="">Parklands</option>
        <option value="">Town</option>

    </select>
<br><br>
        <input type="Submit" value="Place order">
        
    </form>
                  
<?php include_once("templates/footer.php")?>