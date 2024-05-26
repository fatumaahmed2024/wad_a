<?php
//Indexed or numeric array
$colors= ["Black", "Green", "Yellow"];

print_r($colors);


?>
<br>
<?php
$user = array("Alex", "Peter", "Ann");

print $user[2];

?>

<pre>
    <?php print_r($user);?>
</pre>

<?php
//Associative arrays

$user_data=[
    "fullname" => "Alex Okama",
    "email" =>"AOkama@yahoo.com",
    "phone" =>"+254796114978"
];
print $user_data["email"];
?>

<?php
//Multidimensional arrays

$user_details=[
    "Director" => array(
        "fullname" => "Alex Okama",
        "address" => "Mada",
        "email" =>"AOkama@yahoo.com",
        "phone" => [
            "Home" =>"+2546789098",
            "Work" => "+2543678543",
            "Mobile" => "+25445678920",

        ]
        ),

        "Secretary" => array(
            "fullname" => "Alex Okama",
        "address" => "Mada",
        "email" =>"AOkama@yahoo.com",
        "phone" => [
            "Home" =>"+2546789098",
            "Work" => "+25476223450",
            "Mobile" => "+25431445624",

        ]
    
        ),
        "Manager" => array(
            "fullname" => "Alex Okama",
        "address" => "Mada",
        "email" =>"AOkama@yahoo.com",
        "phone" => [
            "Home" =>"+254788889034",
            "Work" => "+2543678543",
            "Mobile" => "+25431445624",

        ]
        )

        
        ];
        print $user_details
        ["Secretary"]["phone"]["Work"];

?>
<pre>
    <?php print_r($user_details);
    ?>
</pre>