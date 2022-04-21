<?php
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

if (isset($_POST['submit'])){
    echo "form is submitted " . "<br>";
    if (isset($_POST["username"])){
        $username = $_POST["username"];
    } else {
        $username = "";
    }
    if (isset($_POST["email"])){
        $email = $_POST["email"];
    }else $email = "";
    if (isset($_POST["password"])){
        $password = $_POST["password"];
    }else {
        $password = "";
    }


    $sql = "INSERT INTO user_one (name, email, password)
VALUES ('$username', '$email', '$password')";

    if ($conn->query($sql)) {
        echo "New record created successfully"."</br>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }



    $sql = "SELECT * FROM user_one";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["email"]. "<br>";
        }
    } else {
        echo "0 results";
    }
    $conn->close();
}



?>



