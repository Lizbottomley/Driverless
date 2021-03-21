<!DOCTYPE html>
<html lang="en">
<head>
    <title>FAQ PAGE</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="index.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet "href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div style="" class="container">
    <div class="padding">
        <div class="row  d-flex justify-content-center">
            <div class="col-lg-8 col-lg-8">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <h3 class="card-title" style="color: blue!important; text-align: center!important;">Some frequently asked questions</h3>
                        <p class="card-text "  style=" text-align:center!important">Check if the answer to your inquiry is here, if not, submit your inquiry</p>
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    What kind of after sales services do you offer at Driverless?
                                </button>
                            </h2>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                We are proud to offer a range of maintenance services like fluid inspections, oil changes, tire rotations, and brake checks. Our collision center is also equipped to service your vehicle in the event of a minor or serious traffic accident. You can always expect attentive and prompt service from our factory certified technicians.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    What kind of financing services do you offer?
                                </button>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                                You’ll find a number of leasing and financing options for every budget and credit history at our car finance center in Schaumburg, IL. Contact our team with questions or to get started with the process by using our online form, calling (965) 123-4567, or stopping by in person.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Are you open on Sunday?
                                </button>
                            </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                Our dealership is not open on Sunday, but we are open for business Monday through Friday from 9:00 a.m. to 9:00 p.m. and until 6:00 p.m. on Saturday. Our service and parts departments open at 7:00 a.m. during the week and at 8:30 a.m. on Saturday.
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Why should I choose your dealership?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                <div class="card-body">
                                    We’re autonomous vehicles dealers who care about each of our customers having the most personalized experience possible. You won’t be another number to us. Instead, you can trust our experienced staff to provide the attentive and individual service you deserve for your automotive needs.
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
        <form name="submit_report" method="POST" action="contact.php">
            <div class=" form-group">
            <input class="form-control" id="name"  value="<?php echo $name = $_POST['name']; ?>" name="name" placeholder="Name" type="text" aria-label="readonly input example" readonly >
            </div>
    <div class="form-group">
        <input class="form-control" id="email" value="<?php echo $email = $_POST['email']; ?>" name="email" placeholder="Email" type="email" aria-label="readonly input example" readonly >
    </div>
    <div class="form-group">
        <input class="form-control" id="subject" value=" <?php echo $subject = $_POST['subject']; ?>" name="subject" placeholder="Subject" type="text" aria-label="readonly input example" readonly>
    </div>
    <div class="form-group">
        <input class="form-control" id="message" value="<?php echo $message = $_POST['message']; ?>" name="message" placeholder="Message" type="text" aria-label="readonly input example" readonly>
    </div>
        <input type="submit" value="Submit" class="btn1" />
        <a href="index.php" style="text-decoration:none;" class="btn1">Go Back<a/>
    </div>
    </form>
</body>
</html>