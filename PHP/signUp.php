<?php
    $host = "localhost";
    $user = "postgres";
    $pass = "admin";
    $db = "Event_Management_System";
    $con = pg_connect("host=$host dbname=$db user=$user password=$pass") or die ("Could not connect to Server\n");

    if(!$con){
        echo "Error : Unable to open database\n";
    } else {
        $name = $_POST['userName'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $department = $_POST['department'];
        $semester = $_POST['semester'];


        $query = "INSERT INTO Users (username, email, password, department, semester) VALUES ('$name', '$email', '$password', '$department', '$semester')";

        $result = pg_query($con, $query);
        header('location: ../Pages/logIn.html');
    }
    pg_close($con);
?>