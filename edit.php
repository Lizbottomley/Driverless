<?php
$say='';
include "connection.php"; // Using database connection file here

$id = $_GET['ID']; // get id through query string

$qry = mysqli_query($con,"select * from user_info where ID='$id'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['update'])) // when click on Update button
{
    $email      = $_POST['email'];
    $phone      = $_POST['phone'];
    $add        = $_POST['add'];
    $zip        = $_POST['zip'];
    $cont       = $_POST['cont'];
    $username   = $_POST['username'];
    $fname      = $_POST['fname'];
    $lname      = $_POST['lname'];


    $edit = mysqli_query($con,"Update user_info set Firstname='$fname',Lastname='$lname',Username='$username',Email='$email',Phonenumber='$phone',
    Street_Address='$add',Zipcode='$zip',Country='$cont' where ID='$id'");

    if($edit)
    {
        mysqli_close($con); // Close connection
        header("location:welcome.php"); // redirects to all welcome page
    }
    else
    {
        //echo mysqli_error();
        $say ='Username Already Taken, Please Try Another One!!';
    }
}
?>
<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Edit Information</title>
    <style>
        body{
            background-image: url('https://images.unsplash.com/photo-1512486130939-2c4f79935e4f?ixid=MXwxMjA3fDB8MHxzZWFyY2h8OTJ8fG9mZmljZXxlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60') !important;
            background-size: cover;
            background-repeat: no-repeat;
            color: black !important;
            font-family: monospace;
        }
        .edit{
            background: rgba(211,211,211,0.5)
        }
    </style>
</head>
<body>
<div class="container h-100">
    <div class="row">
        <div class="col-sm-3">
        </div>
        <div class="col-sm-6 edit">
            <h3>Update Data</h3>
            <form method="POST">
                <label for="fname">Firstname</label>
                <div class="form-group">
                    <input type="text" id="fname" class="form-control" name="fname" value="<?php echo $data['Firstname'] ?>" placeholder="Enter Firstname" Required>
                </div>
                <div class="form-group">
                    <label for="lname">Lastname</label>
                    <input type="text" id="lname" class="form-control" name="lname" value="<?php echo $data['Lastname'] ?>" placeholder="Enter Lastname" Required>
                </div>
                <div class="form-group">
                    <label for="user">Username</label>
                    <input type="text" id="user" class="form-control" name="username" value="<?php echo $data['Username'] ?>" placeholder="Enter Username" Required>
                    <p style="color: red"><?php  echo  $say ?></p>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" id="email"  class="form-control" name="email" value="<?php echo $data['Email'] ?>" placeholder="Enter Email" Required>
                </div>
                <div class="form-group">
                    <label for="phone">Phonenumber</label>
                    <input type="text" id="phone" class="form-control" name="phone" value="<?php echo $data['Phonenumber'] ?>" placeholder="Enter Phone number" Required>
                </div>
                <div class="form-group">
                    <label for="add">Address</label>
                    <input type="text" id="add" class="form-control" name="add" value="<?php echo $data['Street_Address'] ?>" placeholder="Enter Address" Required>
                </div>
                <div class="form-group">
                    <label for="zip">Zipcode</label>
                    <input type="text" id="zip" class="form-control" name="zip" value="<?php echo $data['Zipcode'] ?>" placeholder="Enter Zipcode" Required>
                </div>
                <div class="form-group">
                    <label for="cont">Country</label>
                    <input type="text" id="cont" class="form-control" name="cont" value="<?php echo $data['Country'] ?>" placeholder="Enter Country" Required>
                </div>
                <div class="form-group">
                    <button type="submit" class=" btn btn-primary" name="update" value="Update">Update</button>
                    <a href="welcome.php" class="btn btn-default btn-sm active" role="button" aria-pressed="true">Go Back</a>
                </div>
            </form>
        </div>
        <div class="col-sm-3">
        </div>
    </div>
</body>
</html>