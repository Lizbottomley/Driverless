<?php

$message_sent = false;
if (isset($_POST['email']) && $_POST['email'] != '') {

    if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        //submit the form
        $name = $_POST['name'];
        $emailfrom = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];


        $To = "elizabethbottomley23@icloud.com";
        $body = "";

        $body .= "From:" . $name . "\r\n";
        $body .= "From:" . $emailfrom . "\r\n";
        $body .= "From:" . $message . "\r\n";
        //mail($To,$subject,$body);
        $message_sent = true;
    } else {
        $invalid_class_name = "form-invalid";
    }
}
?>
<?php
if ($message_sent):
    ?>
    <h3 style="color: deepskyblue; text-align: center; font-size: 20px">Thanks, <?php echo $name ?> we'll be in touch!!</h3>
    <a href="logout.php" class="btn btn-primary" role="button" aria-pressed="true">GO BACK</a>
<?php
else: echo "<h3 style='color: red; text-align: center; font-size: 20px'>There was an error, please resend your inquiry</h3>";
?>
<br>
    <a href="logout.php" class="btn btn-primary" role="button" aria-pressed="true">GO BACK</a>
<?php
endif;
?>