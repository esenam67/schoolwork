<?php

     

    $userName = $_POST['userName'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $password = $_POST['password'];


// database connection

$conn = new mysqli('localhost', 'root', '', 'registrationform');
if($conn->connect_error){
    die("Connection Failed : ". $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into registered(userName, firstName, lastName, email, password) values(?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $userName, $firstName, $lastName, $email, $password);
 $stmt->execute();
   
    echo "Registration successfully...";
    $stmt->close();
    $conn->close();
}


?>