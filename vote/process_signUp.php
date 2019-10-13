<?php
require('connection.php');
$nameError="";
$emailError="";
//    $yes='';
// $redirect="";
// $reg="";
// $matchError="";
if(isset($_POST['userName']))       //perform the following actions if only the submit button is pressed
{
    $name="";$email="";$password='';
   
    
    $name=mysqli_real_escape_string($conn,$_POST['userName']);   // if not empty then store the name in $name variable and then check for validation of the entered name(should only contain letter capital and small and period )
    if(!preg_match("/^[A-Za-z.0-9]*$/",$name))
    $nameError="only letters,numbers and whitespaces are allowed for username";     //if name is not valid replace the variable $nameError with new info that says insert correct format for username
 
    
   
  
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    if(!empty($email)){
         if(!preg_match("/^[A-Za-z0-9][a-zA-Z0-9._-]{3,}@[a-zA-Z._-]{3,}[.]{1}[a-zA-Z._-]{2,}/",$email)) 
        $emailError="insert valid email plese"; 
        
    }
    $password=mysqli_real_escape_string($conn,$_POST['pass']);
    
        if(!empty($name && $email && $password)){
       $query = "insert into Login(name,password,email) values('$name','$password','$email')";
      $excute=mysqli_query($conn,$query);
      if($excute){
        header('location: http://localhost/Vote/login.php?message=sign up success !!');
        exit();
          mysqli_close($conn);
    }else 
    $matchError="All fields are required!";

}
else{
    header('location: http://localhost/Vote/login.php?message=all fields are required');
    exit();
}
}
?>