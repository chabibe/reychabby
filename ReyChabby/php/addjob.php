<?php
include_once 'connection.php';
$title = $_POST['title'];


        $sql = "INSERT INTO tbl_occupation (JobTitle) 
                VALUES ('".$title."')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
            header('location: ../jobmanagement.html');
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }




?>
