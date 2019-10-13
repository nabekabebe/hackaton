<?php
require('connection.php');
          if($conn && isset($_POST["name"])){
            $usrname = mysqli_real_escape_string($conn,$_POST["name"]);
            $passwd=mysqli_real_escape_string($conn,$_POST["password"]);
            
              
                $query="select * from Login where name='".$usrname."' and password='".$passwd."'";
                $res = mysqli_query($conn, $query);
                if($res){
                    if(mysqli_num_rows($res)>0){
                        // $_SESSION['user']=$_POST['userName'];
                        echo '<script>window.location="index.php";</script>';
                      
                    }else{
                        header('location: http://localhost/Vote/login.php?message=wrong username or password !!');
                        // echo "<div align='center' class='alert alert-danger'>you have entered wrong <strong>username or password !!</strong> </div>";
                        exit();
                    }
                    }
    

          }
              

          ?>