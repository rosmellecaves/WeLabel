<?php

    $yourName = $_POST['yourName'];
    $email = $_POST['email'];
    $password = $_POST['password'];


    //db connect

    $conn = new mysqli("localhost","root","","wl_database");
    if($conn->connect_error){
        die(('Failed to connect : ' . $conn->connect_error));
    }
    else{
        $stmt = $conn->prepare("insert into users(yourName,email,password)
                          values(?,?,?)");
        $stmt->bind_param("sss",$yourName,$email,$password);
        $stmt->execute();
        header("Location:http://localhost:8080/homepage.html");
        $stmt->close();
        $conn->close();
    }



?>