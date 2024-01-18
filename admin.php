<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complain</title>
</head>
<style>
    body {
        background-image: url("background.avif");
        margin: unset;
    }

    #head_logo {
        display: inline;
        overflow: auto;
    }

    #heading {
        display: flex;
        background: rgba(76, 175, 80, 0.7);
        color: white;
    }

    #head_title {
        justify-content: center;
    }

    .Navigation {
        display: flex;
        background-color: rgb(85, 117, 90);
    }

    ul {
        display: flex;
        /*#http://localhost/php projct/index/*/
        float: left;
        list-style-type: none;
    }

    li {
        margin-bottom: 15px;
        font-size: large;

    }

    a {
        text-decoration: none;
        color: white;
        padding-left: 20px;
    }

    #login {
        margin-top: 15px;
        margin-left: 800px;
        font-size: large;
        display: flex;
        float: right;

    }

    /* body part*/
    #disp_data{
        display: flex;
        border: 2px solid red;
    }
</style>

<body>
    <div id="heading">
        <div id="head_logo">
            <img src="istockphoto-1171617683-612x612.png" alt="logo" height="100px" width="100px">
        </div>
        <div id="head_title">
            <h1>ONLINE COMPLAINT PORTAL</h1>
        </div>
    </div>
    <div class="Navigation">
        <nav>
            <ul>
                <a href="#">
                    <li>Home</li>
                </a>
                <a href="#">
                    <li>Navigation</li>
                </a>
                <a href="#body">
                    <li>Complain</li>
                </a>
                <a href="#">
                    <li>Feedback</li>
                </a>
            </ul>
        </nav>
        <div id="login">
            <a href="Registration.php">Register</a>
        </div>
    </div>
    <!-- body part -->
    <!-- <div class="container">
        <h1>Add User</h1>
        <form action="admin.php" method="post">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required>

            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>

            <input type="submit" value="Add User">
        </form>
    </div> -->

    <div id="disp_data">


<?php
$con=mysqli_connect("localhost","root","","complain");
//$db=mysqli_select_db($con,"complain");
?>
<div bgcolor="#006666" text="white ">
 <center><h1>ALL STUDENT DATABASE</h1></center>
<table border="1">
   <th width="100">Registration number</th>
   <th width="100">Name</th>
   <th width="100">Gender</th>
   <th width="100">Email</th>
   <th width="100">Department</th>
   <th width="200">Complain</th>
   <th width="200">Feedback</th>
<?php
 $sql=mysqli_query($con,"select * from complaint");
  
 while($row=mysqli_fetch_array($sql))
 {
?>

<tr>
<td><?php echo $row[0];?></td>
<td><?php echo $row[1];?></td>
<td><?php echo $row[2];?></td>
<td><?php echo $row[3];?></td>
<td><?php echo $row[4];?></td>
<td><?php echo $row[5];?></td>
<td><?php echo $row[6];?></td>
</tr>

<?php
}
?>
</table></div>
<div>
    <form action="filter.php" method="post">
        view a particular data<input type="number" id="search" name="search" >
        <input type="submit" value="search">
    </form>
</div>

    </div>
</body>
</html>


