<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body onload="DynamicTimer();">
    <p id="grouopa"></p>
    <script>
        document.getElementById('grouopa').innerHTML = "This is my first JS cde";
    </script>
<br><br>
<button type="button" onclick="document.getElementById('MyImg').src='images/bulb_on.png'">
    Turn On</button>

<img src="images/bulb_on.png" alt="" id="MyImg" style="width: 500px;">

<button type="button" onclick="document.getElementById('MyImg').src='images/bulb_off.png'">
    Turn Off</button>
<br><br>
<?php date_default_timezone_set("Africa/Nairobi"); ?>
Static timer: <?php print date("H:i:s"); ?>
<br>
Dynamic timer:<span id="dtmer"></span>

    <script src="script.js"></script>
    </body>
</body>
</html>