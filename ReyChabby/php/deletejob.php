<?php
    include_once 'connection.php';
                                    
    $id = $_GET['id'];  

    $sql = "DELETE FROM tbl_occupation WHERE JobTitle='".$id."'";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
  header('location: ../jobmanagement.html');
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
    


?>
