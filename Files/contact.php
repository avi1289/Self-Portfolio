<?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    //database connection...
    $conn = new mysqli('localhost', 'root','', 'contact');
    if($conn->connect_error){
        echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into info(email, phone) values(?, ?)");
        $stmt->bind_param("si", $email, $phone);
        $exe = $stmt->execute();
        echo $exe;
        echo "we will contact you soon";
        $stmt->close();
        $conn->close();
    }
?>