<?php
include "formc.php";
if(isset($_POST["submit"])) {
    $name = $_POST["name"];
    $message = $_POST["message"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    
    // Using Prepared Statements to prevent SQL Injection
    $stmt = $mysql->prepare("INSERT INTO form (name, message, number, email) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $message, $phone, $email);
    $stmt->execute();
    $stmt->close();
    
    header("location:../index.html");
}
?>
