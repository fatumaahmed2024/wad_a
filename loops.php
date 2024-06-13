<h1>loops</h1>
<h2>while-loop</h2>
<?php

/*while-loop

$y=2014;
while($y < 2030){
    print $in . "<br>";
    $y++;
}*/
?>
h3>do-while loop</h3>
<?php

//do-while loop

$d= 1;
do{
    print $d . "<br>";
    $d++;
}while($d<31);
?>
<h4>for loop</h4>
<?php
for($f=45; $f<55; $f++){
    print $f ."<br>";
}
?>
<h4>Foreach</h4>
<?php
$months=["January","February","March","April", "May",
"June","July", "August", "September", "October"," November", "December"
];

/*foreach($months AS $month){
    print $month . "<br>";
}*/
?>
<form action="">
  <select name="" id="">
    <option value="">--Months--</option>
    <?php
    foreach($months AS $month){
        print "<option value=''>$month</option>";
    }
    ?>
  </select>
  <select name="" id="">
    <option value="">--Year--</option>
    <?php
   //while-loop

     $y=2014;
     while($y < 2030){
    print "<option value=''>$y</option>";
    $y++;
}
    ?>
     </select>

<select name="" id="">
  <option value="">--Day--</option>
  <?php
 //do-while loop

  $d= 1;
  do{
  print "<option value=''>$d</option>" ;
  $d++;
  }while($d<32);
  ?>
</select>
</form>

<form action="">
  <select name="" id="">
    <option value=<?php print date('y')?> </option>
    <?php
    foreach($months AS $month){
        print "<option value=''>$month</option>";
    }
    ?>
  </select>
  </form>
