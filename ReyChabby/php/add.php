<?php
include_once 'connection.php';
$profile = $_FILES['my_image']['name'];
$fname = $_POST['fname'];
$name = $fname;
$checkbox = $_POST['tofeature'];
echo $name;


$target_dir = "../profiles/";
$target_file = $target_dir . basename($_FILES['my_image']['name']);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check file size
if ($_FILES["my_image"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["my_image"]["tmp_name"], $target_file)) {
      
    if($checkbox != "True"){
        $checkbox = "False";
    }

    $sql = "INSERT INTO tbl_employee (Name, Profile, Feature) 
    VALUES ('".$name."','".$profile."','".$checkbox."')";

    if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
    


    echo "The file ". htmlspecialchars( basename( $_FILES["my_image"]["name"])). " has been uploaded.";

    header('location: ../index.html');
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
?>