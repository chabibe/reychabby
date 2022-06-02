<?Php
                    include_once 'connection.php';

                    $sql = "SELECT DISTINCT JobTitle FROM tbl_occupation";

                    $result = $conn->query($sql);
                    echo "<table id='employee'>";
                    echo "<tr>";
                    echo "<th>Job </th>";
                    echo "<th>Employee</th>";
                    echo "</tr>";
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            $employID = $row['JobTitle'];

                            echo "<tr>";
                            echo "<td>".$row['JobTitle']."</td>";
                            echo "<td>";
                                $empq = "SELECT EmployeeID FROM tbl_occupation WHERE JobTitle ='".$employID."'";
                                $result = $conn->query($empq);
                                if ($result->num_rows > 0) {
                                    $row = $result->fetch_assoc();
                                        echo $row['EmployeeID'];  
                                    
                                }
                            echo "</td>";
                            echo "<td><a href=\"#\" >Edit</a></td>";
                            echo "<td><a href=\"#\" >Delete</a></td>";
                            echo "</tr>";
        
                            }
                        } else {
    
                    }

                ?>