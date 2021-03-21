<?php

include "connection.php"; // Using database connection file here

$id = $_GET['ID']; // get id through query string

$qry = mysqli_query($con, "delete from appointment where ID='$id'"); // delete query

if($qry == true){
    echo 'Appointment cancel';
    header('location:book.php');
}else{
    echo 'Appointment not cancel, please try again!!';
}

