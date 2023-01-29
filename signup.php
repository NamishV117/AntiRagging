<?php


    $server = 'localhost';
    $username = 'root';
    $password = "";
    $dbname = "anti_ragging";

    $con = mysqli_connect($server, $username, $password, $dbname);
    
    if (!$con) {
        die("Connection failed with database.....".mysqli_connect_error());

    }

    //echo "Success connecting to the db";

    $name = $_POST['name'];
    echo "name : ".$name;
    $phone_number = $_POST['phone_number'];
    $email_ID = $_POST['email_ID'];
    $roll_number = $_POST['roll_number'];
    $section = $_POST['section'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    $sql = "INSERT INTO student (Name1, Phonenumber, EmailID, RollNumber, Section, Password1, ConfirmPassword)VALUES ('$name', '$phone_number', '$email_ID', '$roll_number', '$section' , '$password', '$confirm_password');";
    echo $sql;

    if($con->query($sql) == TRUE){
        echo "Successfully inserted";
    }
    else{
        echo "Error: $sql <br> $conn->error";
    }

    $con->close();


?>