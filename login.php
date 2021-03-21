
<?php
$msg  = '';
if(isset($_POST['login'])){
    include("connection.php");
    $time=time()-600;
    $ip_address= getIpAddr();
    $check_login_row = mysqli_fetch_assoc(mysqli_query($con,"select count(*) as total_count from login_log where try_time>$time and ip_address='$ip_address'" ));
    $total_count = $check_login_row['total_count'];
    if ($total_count ===3){
        $msg = "Too many failed login attempts. Please login after 10 minutes";
    }else{
        $user   = mysqli_real_escape_string($con,$_POST['user']);
        $pass   = mysqli_real_escape_string($con,sha1($_POST['pass']));
        $query = mysqli_query($con, "SELECT * FROM user_info WHERE Username ='$user' AND Password='$pass'");
        if(mysqli_num_rows($query)==0){
            $total_count++;
            $rem_attm=3-$total_count;
            if ($rem_attm==0){
                $msg ="Too many failed login attempts. Please login after 10 minutes";
            }else{
                $msg ="Please enter valid login details.<br>$rem_attm attempt(s) remaining.";
            }
            $try_time = time();
            mysqli_query($con,"insert into login_log(ip_address, try_time) values('$ip_address','$try_time')");
        }
        else{
            $_SESSION['login']=$user;
            mysqli_query($con,"delete from login_log  where ip_address ='$ip_address'");
            ?>
            <script>
                window.location.href="home.php";
            </script>
            <?php
        }

    }
}

function getIpAddr(){
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
        $ipAddr = $_SERVER['HTTP_CLIENT_IP'];
    }elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        $ipAddr=$_SERVER['HTTP_X_FORWARDED_FOR'];
    }else{
        $ipAddr=$_SERVER['REMOTE_ADDR'];
    }
    return $ipAddr;
}
?>
<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Login page of Driverless website">
    <meta name="keywords" content="Driverless, Autonomous vehicles, Cars">
    <meta name="author" content="Elizabeth Bottomley">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>User Login</title>
    <style>
        body{
            background-image: url('https://images.unsplash.com/photo-1497215728101-856f4ea42174?ixid=MXwxMjA3fDB8MHxzZWFyY2h8NHx8b2ZmaWNlfGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=700&q=60') !important;
            background-size: cover;
            background-repeat: no-repeat;
            color: black !important;
            font-family: monospace;
        }
        .container{
            background: transparent;
            margin-top: 75px;
        }
        .login-login{
            background: rgba(211,211,211,0.5);
            padding: 10px;
        }
        .form-control{
            background-color: transparent !important;
            color: #212121 !important;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="container">
        <div class="row">
            <div class="col-sm-4">
            </div>
            <div class="col-sm-4 login-login">
                <h1>Login</h1>
                <hr class="mt-4">
                <div>
                <p style="color: red"><?php echo $msg ?></p>
                </div>
                <form role="form" action="" method="post">
                    <div class="form-group">
                        <label for="user">Username</label>
                        <input type="text" id="user" class="form-control" name="user" placeholder="Username" required/>
                    </div>
                    <label for="password">Password</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        <input type="password"  id="password" class="form-control" name="pass" placeholder="Password" required>
                        <span class="input-group-addon"><i class=" fa fa-eye" aria-hidden="true" id="eye" onclick="toggle()"></i></span>
                    </div>
                    <br>
                    <div class="input-group">
                        <input type="submit" class="btn btn-primary" name="login" value="Login" />
                    </div>
                </form>
                <hr class="mt-4">
                <div class="d-flex justify-content-center links">Don't have an account? <a href="register.php" class="ml-2">Register</a>
                </div>
            </div>
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