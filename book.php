<?php
$output ='';
$liz ='';
if(isset($_POST['search'])) {
    include('connection.php');
    $search = $_POST['fname'];
    $query = mysqli_query($con, "SELECT * FROM appointment where Fullname ='$search'");
    $num = mysqli_num_rows($query);
    if ($num == 0) {
        $output = 'Appointment not found!';
    } else {
        while ($row = mysqli_fetch_array($query)) {
            $no     =$row['ID'];
            $fname = $row['Fullname'];
            $time = $row['Time'];
            $date =$row['Date'];

            $output .= '<div>'. 'Appointment No.' . $no. ''. '<br>'  .'Name:'. $fname.' ' .'<br>'  .'Time:'.$time.' '. '<br>'.'Date:'.$date.'</div>';
        $liz =$no;
        }
    }
}
?>
<?php
$msg='';
if (isset($_POST['book'])){
    include ('connection.php');
    $fname=$_POST['fname'];
    $time=$_POST['time'];
    $date=$_POST['date'];

  $q= mysqli_query($con, "insert into appointment (Fullname,Time,Date) value ('$fname','$time','$date')");

  if ($q==true){
      $msg ='Appointment Booked Successfully !!';
  }else{
      $msg='Booking Failed, please try again !!';
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Appointment</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        /* Remove the jumbotron's default bottom margin */
        .jumbotron {
            margin-bottom: 0;
        }
        .footer {
            padding-top: 24px;
            padding-bottom: 24px;
            background: #212121;
        }
        li:nth-of-type(n+2) {
            margin-left: 8px;
        }
        a {
            font-size: 18px;
            transition: color .235s ease-in-out;
        }
        a :hover {
            color: silver;
        }
        .login-login{
            background: rgba(211,211,211,0.5);
            padding: 10px;
        }
        .details{
            font-size: 30px;
            font-weight: normal;
        }
    </style>
</head>
<body>

<div class="jumbotron">
    <div class="container text-center">
        <h1>Appointment</h1>
        <p>Book,search and cancel an appointment with one of our sales person to find your dream vehicle.</p>
    </div>
</div>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="home.php">Driverless</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li><a href="home.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="newsfeed.php">Newsfeed</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li class="active"><a href="book.php">Appointment</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="welcome.php"><span class="glyphicon glyphicon-user"></span> Your Profile</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h1>Search for your Appointment</h1>
                <form action="" method="post">
                    <div class="form-group">
                        <input name="fname"  type="text" class="form-control " placeholder="Enter your FullName">
                        <button type="submit" class="btn btn-primary" name="search">Search</button>
                    </div>
                </form>
                    <h1 class="details">Your Appointment details are:</h1>
                    <h1  class="details" style="border:  1px solid black; padding: 10px; text-align: center"><?php echo $output;?></h1>
                <a href="cancel.php?ID=<?php echo $liz; ?>" class="btn btn-primary active" role="button" aria-pressed="true">Cancel Appointment</a>
            </div>
            <br>
            <div class="col-sm-6 login-login">
                <h1>Book Appointment</h1>
                <hr class="mt-4">
                <div>
                </div>
                <form role="form" action="" method="post">
                    <div class="form-group">
                        <label for="user">FullName</label>
                        <input type="text" id="name" class="form-control" name="fname" placeholder="John Doe" required/>
                    </div>
                    <div class="form-group">
                        <label for="time">Appointment Time</label>
                        <input type="time"  id="time" class="form-control" name="time" placeholder="8:00am" required>
                    </div>
                    <div class="form-group">
                        <label for="date">Appointment Date</label>
                        <input type="date"  id="date" class="form-control" name="date" placeholder="Jan 1,2021" required>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" name="book" value="Book" />
                    </div>
                    <p style="color: red"><?php echo $msg?></p>
                </form>
            </div>
        </div>
    </div>
</div>
<br>
<footer class="footer">
    <ul class="list-inline mb-0 text-center">
        <li class="list-inline-item ">
            <a href=""  aria-label="link button to driverless twitter page" data-toggle="tooltip" data-placement="bottom" title="Twitter" style="color: deepskyblue"><i class="fa fa-twitter fa-lg"></i></a>
        </li>
        <li class="list-inline-item ">
            <a href=""  aria-label="link button to driverless google page" data-toggle="tooltip" data-placement="bottom" title="Google" style="color: yellow"><i class="fa fa-google-plus fa-lg"></i></a>
        </li>
        <li class="list-inline-item ">
            <a href="" aria-label="link button to driverless instagram page" data-toggle="tooltip" data-placement="bottom" title="Instagram" style="color: darkred"><i class="fa fa-instagram fa-lg"></i></a>
        </li>
        <li class="list-inline-item ">
            <a href="" aria-label="link button to driverless YouTube channel" data-toggle="tooltip" data-placement="bottom" title="Youtube" style="color: red"><i class="fa fa-youtube fa-lg"></i></a>
        </li>
    </ul>
</footer>

<script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>
</body>
</html>








