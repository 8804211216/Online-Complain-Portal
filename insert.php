<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $reg = $_POST['reg'];
    $name = $_POST['fname'];
    $gender = $_POST['m'];
    $mail = $_POST['mail'];
    $department = $_POST['department'];
    $complain = $_POST['complain'];
    $feedback = $_POST['Feedback'];
    $Pending="Pending";

    $con = mysqli_connect("localhost", "root", "", "complain");

    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    $sql = "Insert into complaint values ('$reg','$name','$gender','$mail','$department','$complain','$feedback','$Pending')";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header("Location: index.html");
    } else {
        echo "faild";
    }
}
?> 