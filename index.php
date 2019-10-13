<?php 
$err='';
$error=@$_GET['message'];
if(!empty($error)){
   if($error=='record submitted!!'){
    echo '<script language="javascript">';
    echo 'alert("record submitted successfully!!")';
    echo '</script>'; 
    $error='';
   }else{
    $err='Oops! error';
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
<link rel="stylesheet" type="text/css" href="main.css">

<script>
function readURL(input) {
    document.getElementById("blah").style.display = "block";
    
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#blah')
                .attr('src', e.target.result)
                .width(400)
                .height(600);
        };

        reader.readAsDataURL(input.files[0]);
    }
}
</script>
</head>
<body>
<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                        <h3>Welcome</h3>
                        <p >Ethiopian voter registration system </p>
                    </div>
                    <div class="col-md-9 register-right">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Voter registration form</h3>
                                <div class="row register-form">
                                    <div class="col-md-6">
                                    <strong style="color:green;padding-left:30px;"><?php echo $err; ?></strong><br />
                                    <form action="register.php" method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <input required name="fullName" type="text" class="form-control" placeholder="fullName *" value="" />
                                        </div>
                                        <div class="form-group">
                                        <select name="region" > 
                                            <option >--select region--</option>
                                            <option value="Oromia">Oromia</option>
                                            <option value="Amara">Amara</option>
                                            <option value="Addis Ababa">Addis Ababa</option>
                                            <option value="PinAfark">Afar</option>
                                            <option value="Benshangul">Benshangul</option>
                                            <option value="sumale">sumali</option>
                                            <option value="harari">harari</option>
                                            <option value="SNNP">SNNP</option>
                                            <option value="tigray">tigray</option>
                                            <option value="gambela">gambela</option>
                                            <option value="dire dewa">dire dewa</option>
                                        </select>
                                            </div>
                                        <div class="form-group">
                                            <input required name="woreda" type="text" class="form-control" placeholder="woreda *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input required name="ID" type="text" class="form-control" placeholder="ID *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <div class="maxl">
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="male">
                                                    <span> Male </span> 
                                                </label>
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="female">
                                                    <span>Female </span> 
                                                </label>
                                            </div>
                                        </div>
                                       
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input required name="file" type="file" class="form-control" onchange="readURL(this);" placeholder="fileScan *" value="" />
                                        </div>
                                        <input type="submit" class="btnRegister"  value="Register"/>
                                    </div>
                                    </form> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                <div class="col-md-9 " style="padding:10px;margin-left:25%;">
                    <img style="display:none;" id="blah" src="#" alt="Scanned Image" />
                    </div>
                </div>

            </div>


</body>
</html>

