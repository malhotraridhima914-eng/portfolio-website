<?php

$dbname= "mysql:host=localhost;dbname=db_portfolio";
$username="root";
$password="";

$conn=new PDO($dbname, $username , $password);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message=$_POST["message"];
}

$sql="INSERT INTO users($name , $email , $message) VALUES(:name, :email , :message)";

$stmt=$conn->prepare($sql);

$stmt->execute([
    
])



?>