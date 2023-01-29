<?php


    $server = 'localhost';
    $username = 'root';
    $password = "";
    $dbname = "anti_ragging";

    $con = mysqli_connect($server, $username, $password, $dbname);
    
    if (!$con) {
        die("Connection failed with database.....".mysqli_connect_error());

    }
    $sql = "SELECT RollNumber,Password1 FROM student";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
       if( $row = $result->fetch_assoc()){
        echo "User found";
        header("Location:home.php");

       }
    }else {
        echo "User not found. Please SIGNUP";
    }
    $con->close();

?>