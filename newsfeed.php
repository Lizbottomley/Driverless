<!DOCTYPE html>
<html lang="en">
<head>
    <title>Newsfeed</title>
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

    </style>
</head>
<body>
<div class="jumbotron">
    <div class="container text-center">
        <h1>Newsfeed</h1>
        <p>Videos, Articles & Stories concerning autonomous vehicles</p>
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
                <li><a href="home.php">Home</a></li>
                <li ><a href="about.php">About</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li class="active"><a href="newsfeed.php">News Feed</a></li>
                <li><a href="book.php">Appointment</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="welcome.php"><span class="glyphicon glyphicon-user"></span> Your Profile</a></li>
                <li><a href="logout.php"><span class="fa fa-sign-out"></span> Logout</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
    <div class="embed-responsive embed-responsive-21by9">
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/eQwIiUPWASo?autoplay=1&mute=1&loop=1" allowfullscreen>
        </iframe>
    </div>
</div>
<footer class="footer">
    <ul class="list-inline mb-0 text-center">
        <li class="list-inline-item ">
            <a href=""  data-toggle="tooltip" data-placement="bottom" title="Twitter" style="color: deepskyblue"><i class="fa fa-twitter fa-lg"></i></a>
        </li>
        <li class="list-inline-item ">
            <a href=""  data-toggle="tooltip" data-placement="bottom" title="Google" style="color: yellow"><i class="fa fa-google-plus fa-lg"></i></a>
        </li>
        <li class="list-inline-item ">
            <a href=""  data-toggle="tooltip" data-placement="bottom" title="Instagram" style="color: darkred"><i class="fa fa-instagram fa-lg"></i></a>
        </li>
        <li class="list-inline-item ">
            <a href="" data-toggle="tooltip" data-placement="bottom" title="Youtube" style="color: red"><i class="fa fa-youtube fa-lg"></i></a>
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