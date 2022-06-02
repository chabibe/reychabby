<?php
    include_once 'connection.php';
                                    
    $id = $_GET['id'];  

    $sql = "DELETE FROM tbl_employee WHERE ID='".$id."'";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
  header('location: ../employeemanagement.html');
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
    
?>