<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $reg = $_POST['reg'];

    $con = mysqli_connect("localhost", "root", "", "complain");

    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    $sql = "SELECT track FROM complaint WHERE Reg = '$reg'";
    $result = mysqli_query($con, $sql);

    if ($result=="Pending") { 
        // header("Location:index/index.html");
        echo "Pending";
    } else {
        echo "Recived";
    }
}

?>