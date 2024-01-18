<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complain</title>
</head>
<style>
    body {
        
        margin: unset;
        background-image: url("background.avif");
    }
    input{
        color: black;
        font-weight: bold;
    }
    #head_logo {
        display: inline;
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
    #body {
        /* border: 2px solid red; */
        color: rgb(0, 0, 0);
        font-weight: bold;
        align-items: center;
    }

    #form {
        /* border: 2px solid red; */
        margin-left: 35%;
        align-items: center;
        text-align: center;
    }
    /* tr,td{
        border: 2px solid red;;
    } */
    .foot{
        /* border: 2px solid red; */
        text-align: center;
        font-weight: bold;
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
                <a href="index.php">
                    <li>Home</li>
                </a>
                <a href="#">
                    <li>Navigation</li>
                </a>
                <a href="index.html">
                    <li>Complain</li>
                </a>
                <a href="index.html">
                    <li>Feedback</li>
                </a>
            </ul>
        </nav>
        <!-- <div id="login">
            <a href="Login.php">Sign in</a>
            
        </div> -->
    </div>

  <div>
  <?php
$con=mysqli_connect("localhost","root","","complain");
$search = $_POST['search'];
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
 $sql=mysqli_query($con,"select * from complaint where Reg = '$search'");
  
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
$update=mysqli_query($con,"update complaint set track='Recieved' where Reg ='$search';");
}
?>
  </div>
</body>
</html>