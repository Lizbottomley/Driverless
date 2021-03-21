<!DOCTYPE html>
<html lang="en">
<head>
   <title>About Us</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
    body{
        font-size: 12px;
    }
    .navbar {
        margin-bottom: 50px;
        border-radius: 0;
    }

    body{
        color:black;
        background-color: white;
        font-size: 25px;
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
    /*  Logos*/
    .logo{
        font-size: 70px;
        color:black;
    }
    .col-sm-3{
        text-align: center;
    }
</style>
</head>
<body>
<div class="jumbotron">
    <div class="container text-center">
        <h1>About Us</h1>
        <p>Mission, Vision & Leadership</p>
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
            <a class="navbar-brand" href="#">Driverless</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="about.php">About</a></li>
                <li><a href="home.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="newsfeed.php">News Feed</a></li>
                <li ><a href="book.php">Appointment</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="welcome.php"><span class="glyphicon glyphicon-user"></span> Your Profile</a></li>
                <li><a href="logout.php"><span class="fa fa-sign-out"></span> Logout</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col-sm-3">
            <span class="fa fa-user logo"></span>
            <h4 style="font-size: 14px; font-weight: bold">Number of Employees</h4>
            <p style="font-size: 30px; font-weight: bold; color: deepskyblue">2,875</p>
        </div>
        <div class="col-sm-3 ">
            <span class="fa fa-car logo"></span>
            <h4 style="font-size: 14px; font-weight: bold">Number of produced Cars</h4>
            <p style="font-size: 30px; font-weight: bold; color: deepskyblue">7,400</p>
        </div>
        <div class="col-sm-3">
            <span class="fa fa-home logo"></span>
            <h4 style="font-size: 14px; font-weight: bold">Number of Stores</h4>
            <p style="font-size: 30px; font-weight: bold; color: deepskyblue">273</p>
        </div>
        <div class="col-sm-3">
            <span class="fa fa-smile-o logo"></span>
            <h4 style="font-size: 14px; font-weight: bold">Number of Customers</h4>
            <p style="font-size: 30px; font-weight: bold; color: deepskyblue">6,927</p>
        </div>
    </div>
</div>

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