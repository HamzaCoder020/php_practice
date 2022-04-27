<?php

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sales_scheme";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST["submit"])){
    //form was submitted
    $email = $_POST["email"];
    $password = $_POST["passpicked"];
    $username = $_POST["namepicked"];

    print_r($_POST);

    $s = "select * from resgistered_user where email='$email' && password = '$password'";

    $result = $conn->query($s);
    $num =  $result->num_rows;


    if($num == 0){
        header('location:premium.php');
    }else{
        echo "Wrong Email or Password";
    }


}



?>

