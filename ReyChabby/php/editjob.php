<?php
    include_once 'connection.php';
                                    
    $old = $_POST['efirstname'];  
    $new = $_POST['qfirstname']; 


    $sql = "UPDATE tbl_occupation set JobTitle='".$new."'  WHERE JobTitle='".$old."'";
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
        header('location: ../jobmanagement.html');
      } else {
        echo "Error updating record: " . $conn->error;
      }
                              
?>