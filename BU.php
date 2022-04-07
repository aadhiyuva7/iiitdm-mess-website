<?php
session_start();
$con = mysqli_connect("localhost","root", "practice", "user");


if(isset($_POST['save_select']))
{
    $name = $_POST['name'];
    $Slot = $_POST['Slot'];
    $email = $_POST['email'];

    $query = "INSERT INTO demo (name, Slot, email) VALUES('$name', '$Slot', '$Email')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $SESSION['status'] = "Inserted Successfully";
        header("Location: Slot Booking.html")
    }
    else {
        $_SESSION['status'] = "Not Inserted";
        header9"Location: Slot Booking.html");
    }
}

