<html>
<head>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>page one</title>

</head>
<body>
<pre>
    <?php
        print_r($_POST);
    ?>
</pre>
<br>
<?php

if (isset($_POST['submit'])){
    echo "form is submitted " . "<br>";
    if (isset($_POST["username"])){
        $username = $_POST["username"];
    } else {
        $username = "";
    }
    if (isset($_POST["password"])){
        $password = $_POST["password"];
    }else $password = "";
    }
else {
    $username = "abdul";
    $password = "12345";
    }


    echo "Username : "."{$username}" . " " . "<br/>" . "Password : " .  "{$password}"  . "<br/>" ;


?>

</body>
</html>
