<?php
include('connection.php');
$user_check = $_SESSION['login'];
$query =mysqli_query($con,"SELECT ID,Username FROM user_info where Username='$user_check'");
$row = mysqli_fetch_array($query, MYSQLI_ASSOC);
$loggedin_id=$row['ID'];
$loggedin_session = $row['Username'];
if (!isset($loggedin_session) || $loggedin_session == NULL) {
    echo "Go back";
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>User Profile</title>
    <style>
        body{
            color:black;
            font-size: 16px;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        }
    </style>
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Driverless</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li><a href="home.php">Home</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="welcome.php"><span class="fa fa-user"></span><?php echo $loggedin_session; ?></a></li>
                <li ><a href="deleteac.php"><span class="fa fa-trash "></span> Delete Account</a></li>
                <li><a href="logout.php"><span class="fa fa-sign-out"></span> Logout</a></li>
            </ul>
        </div>
    </div>
</nav>
<?php
$sql="SELECT * FROM user_info where ID=$loggedin_id";
$result=mysqli_query($con,$sql);
?>

<?php
while($rows=mysqli_fetch_array($result)){
    ?>
<div class="page-content page-container bg-image">
    <div class="padding">
        <div class="container d-flex justify-content-center">
            <div class="row ">
                <div class="card-block user-card-full">
                    <div class="col-md-3">
                        <div class="card-block text-center text-white">
                            <div class="m-b-25"> <img src="https://img.icons8.com/bubbles/100/000000/user.png" class="img-radius" alt="User-Profile-Image"> </div>
                            <h6  style="color: #212121" class="f-w-600"><?php echo $rows['Firstname'];?>&nbsp;<?php echo $rows['Lastname']; ?></h6>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card-block">
                            <p style="font-weight: bold">Hello,&nbsp; <?php echo $rows['Firstname'];?>&nbsp;<?php echo $rows['Lastname']; ?>!</p>
                            <p>From your profile you have the ability to view and update your recent account information. Select a link below to edit your information.</p>
                            <div class="row">
                                <table class="table table-striped"" border="0" align="center" cellpadding="2" cellspacing="0">
                                <tr >
                                    <td> <div align="left" >User_ID:</div> </td>
                                    <td class="tl-4"><?php echo $rows['ID']; ?></td>
                                </tr>
                                <tr >
                                    <td> <div align="left" >Full Name:</div> </td>
                                    <td class="tl-4"><?php echo $rows['Firstname']; ?>&nbsp;<?php echo $rows['Lastname']; ?></td>
                                </tr>
                                <tr id="lg-1">
                                    <td class="tl-1"><div align="left" >Username:</div></td>
                                    <td class="tl-4"><?php echo $rows['Username']; ?></td>
                                </tr>
                                <tr >
                                    <td> <div align="left" >Email:</div> </td>
                                    <td class="tl-4"><?php echo $rows['Email']; ?></td>
                                </tr>
                                <tr >
                                    <td> <div align="left" >Phone Number:</div> </td>
                                                <td class="tl-4"><?php echo $rows['Phonenumber']; ?></td>
                                </tr>
                                <tr >
                                    <td> <div align="left" >Address:</div> </td>
                                    <td class="tl-4"><?php echo $rows['Street_Address']; ?></td>
                                </tr>
                                <tr >
                                    <td> <div align="left" >Zipcode:</div> </td>
                                    <td class="tl-4"><?php echo $rows['Zipcode']; ?></td>
                                </tr>
                                <tr >
                                    <td> <div align="left" >Country:</div> </td>
                                    <td class="tl-4"><?php echo $rows['Country']; ?></td>
                                </tr>
                                </table>
                            </div>
                            <div >
                                <a href="edit.php?ID=<?php echo $rows['ID']; ?>" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Edit Information</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                // close while loop
}
?>
</body>
</html>
