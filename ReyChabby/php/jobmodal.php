

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">

            <button type='button' class='close' data-dismiss='modal'>&times;</button>
            <h4 class='modal-title' id='header'>Add Job</h4>
            </div>
            <div class='modal-body'>
                

            <form method="POST" action="./php/editjob.php">
                <div class="container-fluid">
                    <div class="form-group input-group">
                        <span class="input-group-addon" style="width:150px;">Name:</span>
                        <input type="text" style="width:350px;" class="form-control" id="efirstname" name="efirstname" readonly  >
                    </div>    
                </div>
                <div class="container-fluid">
                    <?php  
                    include_once 'connection.php';
                                    
                
                
                
                    $sql = "SELECT * FROM tbl_occupation";
                
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<div class = 'form-group input-group'>";    
                            echo "<label class='switch'>";
                            echo "<input type='checkbox' name='tofeature' value='True'>";
                            echo "<span class='toggle round'></span>";
                            echo "<label style='margin-top: -.5px;'>". $row['JobTitle']."</label>";
                            echo "</label>";
                            echo "</div>";
                        }
                    }
                    else 
                    {
                
                    }
                    ?>

            
        </div>

        <div class="modal-footer">
        <button type="submit" value="submit" class="btn btn-success"><span class="glyphicon glyphicon-edit"></span> </i> Update</button>
    </form>
        <button type="button" class="btn btn-default" data-dismiss="modal" onclick="ClearFields();">Close</button>
        </div>
      </div>
      
    </div>
  </div>
