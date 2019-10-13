<?php
require('connection.php');
// Check connection

if ($conn->connect_error) {

die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['fullName']) && !empty($_FILES["file"]["name"])){
    $name= mysqli_real_escape_string($conn,$_POST['fullName']);
    $id= mysqli_real_escape_string($conn,$_POST['ID']);
    $region=mysqli_real_escape_string($conn,$_POST['region']);
    $woreda=mysqli_real_escape_string($conn,$_POST['woreda']);
    $gender=mysqli_real_escape_string($conn,$_POST['gender']);
  

    $targetDir = "uploads/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $sql = "INSERT INTO voters ".
    "(name,id_number,image,gender,region,woreda) ".
    "VALUES"."('$name','$id','$fileName','$gender','$region','$woreda')";
            $insert=mysqli_query($conn,$sql);
            if($insert){
                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
                header('location: http://localhost/Vote/index.php?message=record submitted!!');
                exit();
            }else{
                $statusMsg = "File upload failed, please try again.";
                echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}




?>