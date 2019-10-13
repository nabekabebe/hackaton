<?php 
$show_error='';
$signError='';
$success='';
$error=@$_GET['message'];
if(!empty($error)){
    if ($error=='sign up success !!'){
        $success='sign up success !!';
        $show_error='';
        $signError='';
    }elseif($error=='wrong username or password !!'){
         $signError='wrong username or password !!';
         $show_error='';
         $success='';
    }
    elseif($error=='all fields are required'){
        $show_error="<div class='alert alert-danger'><strong>$error</strong> !</div>";
        $signError='';
        $success='';
    }
       
}

?>
<!DOCTYPE >
<html >
<head>
  <title>vote registration system</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="login.css">
<!------ Include the above in your HEAD tag ---------->
</head>
<body>
<div class="container login-container">
            <div class="row">
                <div class="col-md-6 login-form-1">
                    <h3>Login</h3>
                    <form action="process_login.php" method="POST">
                        <div class="form-group">
                            <input required name="name" type="text" class="form-control" placeholder="Your Name *" value="" />
                        </div>
                        <div class="form-group">
                            <input required name="password" type="password" class="form-control" placeholder="Your Password *" value="" />
                        </div>
                        <div> <strong><?php echo $signError; ?></strong></div>
                   
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Login" />
                        </div>
                        <div class="form-group">
                            <a href="#" class="ForgetPwd">Forget Password?</a>
                        </div>

                    </form>
                </div>
                <div class="col-md-6 login-form-2" style="align:left;">
                    <h3>Sign Up</h3>
                    <form action="process_signUp.php" method="POST">
                    <div class="form-group">
                    <strong><?php echo $success; ?> </strong>
                            <input required name="userName" type="text" class="form-control" placeholder="Your name *" value="" />
                        </div>
                        <div class="form-group">
                            <input required name="email" type="text" class="form-control" placeholder="Your Email *" value="" />
                        </div>
                        <div class="form-group">
                            <input required name="pass" type="password" class="form-control" placeholder="Your Password *" value="" />
                        </div>
                        <div> <p><?php echo $show_error; echo $success; ?></p></div>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Sign Up" />
                        </div>
                    </form>
                </div>
            </div>
        </div>

</body>
</html>        