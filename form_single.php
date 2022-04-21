<?php

if(isset($_POST["submit"])){
    //form was submitted
    $username = $_POST["username"];
    $password = $_POST["password"];

    if($username=="kevin" && $password == "secret") {
     redirect_to("basic.html");
    }
    else{
        $username = $_POST["username"];
        $message = " There are some errors.";
    }
} else {
    $message = "PLEASE LOGIN ";
}



?>

<html lang="en">
<head>

    <title>form page</title>

</head>
<body>
<form action="form_single.php" method="post">
    <?php echo $message ?> <br>
    <label for="exampleInputEmail1">User Name</label>
    <input type="text" name="username" placeholder="Username"> <br>
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password"  placeholder="Password">


    <input type="submit" name="submit" class="btn btn-primary" value="Submit">
</form>
</body>
</html>
