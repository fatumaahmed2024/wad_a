<?php 
   require_once("Includes/db_connect.php"); 
  include_once ("templates/heading.php");   
  require_once ("templates/nav.php");

  if(isset($GET["DelId"])){
        $DelId=$GET["DelId"];

      // sql to delete a record
      $del_mes = "DELETE FROM messages WHERE messageId='$DelId' LIMIT 1";

      if ($conn->query( $del_mes) === TRUE) {
       header("Location: view_messages.php");
       exit();
      } else {
        echo "Error deleting record: " . $conn->error;
      }
  }
?>    

         <div class="banner">
            <h1>Messages</h1>
           </div>
           
    <h1>Messages</h1>
    <table>
      <thead>
        <tr>
            <th colspan="2"> Sender Name</th>
            <th> Sender Phone Number</th>
            <th> Sender Email</th>
            <th> Destination</th>
            <th> Time</th>
            <th> Action</th>
        </tr>
</thead> 
<tbody>
<?php
    
    $select_msg = "SELECT * FROM `messages` ORDER BY datecreated DESC ";
    $sel_msg_res = $conn->query($select_msg);
    $en=0;
    if ($sel_msg_res->num_rows > 0) {
       
      // output data of each row
      while($sel_msg_row = $sel_msg_res->fetch_assoc()) {
        $en++;
    ?>
      <tr>

                <td><?php print $en; ?>.</td> 
                <td><?php print $sel_msg_row["sender_name"]; ?></td>
                <td><?php print $sel_msg_row["sender_phone_number"]; ?></td>
                <td><?php print $sel_msg_row["sender_email"]; ?></td>
                <td><?php print "<strong>" .$sel_msg_row["Destination"] .'</strong> - '
                 .substr($sel_msg_row["text_message"], 0 , 10). '...' ;?></td>
                <td><?php print date("d-M-Y H:i", strtotime( $sel_msg_row["datecreated"])); ?></td>
                <td>[<a href="edit_msg.php?messageId=<?php print $sel_msg_row["messageId"]; ?>"> Edit</a> ]
                 [ <a href="?DelId=<?php print $sel_msg_row["messageId"]; ?>">Del</a>]</td>
        </tr>
             
<?php    
    } 
    } else {
      echo "0 results";
    }
   
  ?> 
     </tbody>
      <thead>
        <tr>
                <th colspan="2"> Sender Name</th>
                <th> Sender Phone Number</th>
                <th> Sender Email</th>
                <th> Destination</th>
                <th> Time</th>
                <th> Action</th>
        </tr>
      </thead> 
        </table>
                  
        <?php include_once("templates/footer.php")?>