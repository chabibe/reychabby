<?php
    include_once 'connection.php';
                                    
    $id = $_GET['id'];  



    $sql = "SELECT * FROM tbl_employee WHERE ID='".$id."'";

    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "Name".$row['Name']."</br>";
            echo "Name".$row['regDate']."</br>";
            
        }
    }
    else 
    {

}
                              
?>