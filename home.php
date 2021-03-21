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
    <title>Home Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Driverless website, number producer of autonomous vehicles">
    <meta name="keywords" content="Driverless, Autonomous vehicles, Cars, self-driving">
    <meta name="author" content="Elizabeth Bottomley">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<style>
    .feedback{
        font-size: 20px;
    }
    #contact_us{
        text-align: center;
    }
    .logo-small {
        color: blue;
        font-size: 70px;
    }
    /* Footer */
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
<body>
<div class="jumbotron">
    <div class="container text-center">
        <h1>Driverless</h1>
        <p>Best autonomous vehicles site!!</p>
        <button type="button"  class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Subscribe!!</button>
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
                <li class="active"><a href="home.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="newsfeed.php">News Feed</a></li>
                <li ><a href="book.php">Appointment</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="welcome.php"><span class="fa fa-user"></span> Your Profile</a></li>
                <li><a href="logout.php"><span class="fa fa-sign-out"></span> Logout</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" aria-label="slide show of the latest our latest vehicles" role="listbox">

            <div class="item active">
                <img src="https://preview.autofutures.tv/import/521731.jpg" alt="Charvia" class="img-fluid">
                <div class="carousel-caption">
                    <h3 class="display-5" id="timer"></h3>
                    <p>To launch of three new self-driving vehicles <br> Bugatti President</p>
                </div>
            </div>
            <div class="item">
                <img src="https://carsguide-res.cloudinary.com/image/upload/f_auto,fl_lossy,q_auto,t_cg_hero_large/v1/editorial/bugatti-chiron-2017-%2813%29.jpg" alt="charvia" class="img-fluid">
                <div class="carousel-caption">
                    <p>Bugatti Chiron</p>
                </div>
            </div>
            <div class="item">
                <img src="https://carsguide-res.cloudinary.com/image/upload/f_auto,fl_lossy,q_auto,t_cg_hero_large/v1/editorial/bugatti-chiron-2017-%2813%29.jpg" alt="charvia" class="img-fluid">
                <div class="carousel-caption">
                    <p>Bugatti Chiron</p>
                </div>
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<div class="container-fluid text-center">
    <h2>SERVICES</h2>
    <h4>What we offer</h4>
    <br>
    <div class="row">
        <div class="col-sm-4">
            <span class="fa fa-hand-rock-o logo-small"></span>
            <h4>Quality</h4>
            <p>All of our software and vehicle are of high and great quality/</p>
        </div>
        <div class="col-sm-4">
            <span class="fa fa-heart logo-small"></span>
            <h4>LOVE</h4>
            <p>We put love into all of our products and services</p>
        </div>
        <div class="col-sm-4">
            <span class="fa fa-lock logo-small"></span>
            <h4>Security</h4>
            <p>All our products are secure, so that you and your family can also be secure</p>
        </div>
    </div>
    <br><br>
    <div class="row">
        <div class="col-sm-4">
            <span class="fa fa-leaf logo-small"></span>
            <h4>GREEN</h4>
            <p>All our product are ECO-friendly, we love to protect our planet.</p>
        </div>
        <div class="col-sm-4">
            <span class="fa fa-certificate logo-small"></span>
            <h4>CERTIFIED</h4>
            <p>We have certified and highly trained employees to handle all of your needs and queries.</p>
        </div>
        <div class="col-sm-4">
            <span class="fa fa-wrench logo-small"></span>
            <h4>HARD WORK</h4>
            <p>We work hard so that you and your family can relax and enjoy our handwork.<p>
        </div>
    </div>
</div>
<br>
<br>

<h2 style="text-align: center">Customer's Feedback</h2>
<div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div  style="background-color: darkgrey" aria-label="carousal-inner" class="carousel-inner">
        <div class="item active" >
            <h4 class="feedback">"This company is the best. I am so happy with the result!"<br><span>Michael Roe, Vice President, Comment Box</span></h4>
        </div>
        <div class="item">
            <h4 class="feedback">"One word... WOW!!"<br><span>John Doe, Salesman, Rep Inc</span></h4>
        </div>
        <div class="item">
            <h4 class="feedback">"Could I... BE any more happy with this company?"<br><span>Chandler Bing, Actor, Friends</span></h4>
        </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" ></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" ></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<br><br>
<div class="container-fluid " id="contact_us">
    <div class="row">
        <div class="col-sm-6">
            <h2 class="text-center">CONTACT US</h2>
            <p>Contact us and we'll get back to you within 24 hours.</p>
            <p><span class="fa fa-map-marker"></span> Salwa, Kuwait</p>
            <p><span class="fa fa-phone"></span> (+965) 12345678</p>
            <p><span class="fa fa-envelope"></span> driverless@vehicles.com</p>
        </div>
        <div class="col-sm-4">
            <h2 class="text-center">CONTACT FORM</h2>
            <form action="faq.php" method="post">
                <div class=" form-group">
                    <label for="name">FullName</label>
                    <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                </div>
                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input class="form-control" id="subject" name="subject" placeholder="Subject" type="text">
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control" id="message" name="message" placeholder="Message" rows="5"></textarea><br>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary"  type="submit">Send</button>
                </div>
        </div>
    </div>
    </form>
</div>
<!-- newsletter-->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 style="text-align: center">STAY TUNE</h3>
            </div>
            <div class="modal-body">
                <p>Subscribe to our newsletter and never miss our designs,discounts,latest news and etc.</p>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="news_name">Fullname</label>
                        <input  class="form-control" id="news_name" type="text" placeholder="John Doe" required/>
                    </div>
                    <div class="form-group">
                        <label for="news">Email</label>
                        <input  class="form-control" id="news" type="email" placeholder="email@example.com" required/>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary"  type="submit">Subscribe</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
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
    // Set the date we're counting down to
    var countDownDate = new Date("May 23, 2021 15:37:25").getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

        // Get today's date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Output the result in an element with id="demo"
        document.getElementById("timer").innerHTML = days + "d " + hours + "h "
            + minutes + "m " + seconds + "s ";

        // If the count down is over, write some text
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("timer").innerHTML = "Launch Day!!! Yay!!";
        }
    }, 1000);
</script>
</body>
</html>
