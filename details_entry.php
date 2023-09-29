<?php

$servername = "localhost";
$username = "root";
$password = "";
$database_name = "wl_database";

$conn = new mysqli($servername,$username,$password,$database_name);
//checkk the connection

if($conn->connect_error){
    die("Connection Failed:" . $conn->connect_error);
}

    $clientName = $_POST['clientName'];
    $email = $_POST['email'];
    $companyName = $_POST['companyName'];
    $projName = $_POST['projName'];
    $projDesc = $_POST['projDesc'];
    $fileUpload = $_POST['fileUpload'];
    $addInfo = $_POST['addInfo'];

    $sql = "INSERT INTO entry_details (clientName,email,companyName,projName,projDesc,fileUpload,addInfo)
                VALUES ('$clientName','$email','$companyName','$projName','$projDesc','$fileUpload','$addInfo')";

    if ($conn->query($sql) === TRUE){
        header("Location:http://localhost:8080/index.html");
    }
    else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

?>