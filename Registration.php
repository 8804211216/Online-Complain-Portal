<!DOCTYPE html>
<html>
<head>
    <title>Username and Password Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            margin-top: 50px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px 0px #000;
        }

        h2 {
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-weight: 600;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        .form-group input[type="submit"] {
            background: #333;
            color: #fff;
            cursor: pointer;
        }

        .form-group input[type="submit"]:hover {
            background: #444;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Register user</h2>
        <form action="#" method="post">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" placeholder="Enter your username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
            </div>
            <div class="form-group">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $con = mysqli_connect("localhost", "root", "", "complain");

    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    $sql = "Insert into login values ('$user','$pass')";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header("Location: admin.php");
    } else {
        echo "Login failed. Invalid username or password.";
    }
}
?>