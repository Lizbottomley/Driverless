
<?php
$msg  = '';
if(isset($_POST['register'])) {
    include("connection.php");
    $fname      = $_POST['fname'];
    $lname      = $_POST['lname'];
    $email      = $_POST['email'];
    $phone      = $_POST['phone'];
    $add        = $_POST['add'];
    $zip        = $_POST['zip'];
    $cont       = $_POST['cont'];
    $user       = $_POST['user'];
    $pass       = sha1($_POST['pass']);

    $s = "select * from user_info where Username ='$user'";

    $result = mysqli_query($con, $s);

    $num = mysqli_num_rows($result);

    if ($num == 1) {
        $msg = 'Username already taken,try another one';
    } else {
        $reg = "Insert into user_info (Firstname,Lastname,Username,Email,Phonenumber,Street_Address,
                    Zipcode,Country,Password)value ('$fname','$lname','$user','$email','$phone','$add','$zip','$cont','$pass')";
        mysqli_query($con, $reg);
        $msg = 'Registration Successful!!!';
        header('location:login.php');
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Registration page of Driverless website">
    <meta name="keywords" content="Driverless, Autonomous vehicles, Cars">
    <meta name="author" content="Elizabeth Bottomley">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>User Registration</title>
    <style>
        body{
            background-image: url('https://images.unsplash.com/photo-1497215728101-856f4ea42174?ixid=MXwxMjA3fDB8MHxzZWFyY2h8NHx8b2ZmaWNlfGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=700&q=60') !important;
            background-size: cover;
            background-repeat: no-repeat;
            color: black !important;
            font-family: monospace;
        }
        .login-login{
            background: rgba(211,211,211,0.5);
            padding: 10px;
        }
        .form-control{
            color: #212121 !important;
        }
        .container{
            margin-top: 50px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="container login-login">
            <h1 style="text-align: center">Register</h1>
        <hr class="mt-4">
                <form role="form" action="" method="post">
                    <div class="row">
                        <div class="col-sm-1">
                        </div>
                    <div class="form-group col-sm-3">
                        <label for="fname">Firstname</label>
                        <input type="text"  id="fname" class="form-control" name="fname" placeholder="Firstname" required/>
                    </div>
                    <div class="form-group col-sm-3">
                        <label for="lname">Lastname</label>
                        <input type="text"  id="lname" class="form-control" name="lname" placeholder="Lastname" required/>
                    </div>
                    <div class="form-group col-sm-3">
                        <label for="email">Email</label>
                        <input type="email" id="email" class="form-control" name="email" placeholder="Email" required/>
                    </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-1">
                        </div>
                    <div class="form-group col-sm-3">
                        <label for="phone">Phone number</label>
                        <input type="text"  id="phone" class="form-control" name="phone" placeholder="Phone number" required/>
                    </div>
                    <div class="form-group col-sm-3">
                        <label for="add">Address</label>
                        <input type="text" id="add" class="form-control" name="add" placeholder="Address" required/>
                    </div>
                    <div class="form-group col-sm-3">
                        <label for="zip">Zipcode</label>
                        <input type="text" id="zip" class="form-control" name="zip" placeholder="Zipcode" required/>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-sm-1">
                    </div>
                    <div class="form-group col-sm-3">
                        <label for="cont">Country</label>
                        <input type="text" id="cont" class="form-control" name="cont" placeholder="Country" required/>
                    </div>
                    <div class="form-group col-sm-3">
                        <label for="user">Username</label>
                        <input type="text" id="user" class="form-control" name="user" placeholder="Username" required/>
                        <p style="color: red"><?php echo $msg ?></p>
                    </div>
                        <label for="password"> Password</label>
                    <div class="input-group col-sm-3">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        <input type="password"  id="password" class="form-control" name="pass" placeholder="Password" required>
                        <span class="input-group-addon"><i class=" fa fa-eye" aria-hidden="true" id="eye" onclick="toggle()"></i></span>
                    </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-1">
                        </div>
                    <div class="form-group col-sm-3">
                        <input type="submit" class="btn btn-primary" name="register" value="Register" />
                    </div>
                        <div class="d-flex justify-content-center links col-sm-3">Already have an account? <a href="login.php" class="ml-2">Signin</a>
                    </div>
                    </div>
                </form>
        </div>
    </div>
</div>

<script>
    var state = false;
    function toggle(){
        if(state){
            document.getElementById("password").setAttribute("type", "password");
            document.getElementById("eye").style.color='#7a797e';
            state = false;
        }else {
            document.getElementById("password").setAttribute("type", "text");
            document.getElementById("eye").style.color='#5887ef';
            state = true;
        }
    }
</script>
</body>
</html>

