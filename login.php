<?php

session_start();

?>

<!DOCTYPE html>

<html>

<head>

	<title>login</title>

</head>

<body background="12.jpg">

<form method="POST" action="login.php" autocomplete="off" style="text-align:center;margin-top: 250px;font-size: 22px; color:white">

	USERNAME  <input type="text" name="uname" style="font-weight: bold;" >

	<br>

	<br>

	<br>

	PASSWORD <input type="password" name="pass" >

	<br>

	<br>

	<br>

	<input type="submit" name="login" value="login" style="background-color: black;color:white;height: 30px;width: 80px;">

</form>

<p style="text-align: center;color: white;font-weight: bold;">Are You New User Go To Signup Page <a href="signup.php"> click here</a></p>

</body>

</html>

<?php

include('config.php');

if (isset($_POST['login']))

 {

   $uname=$_POST['uname'];

   $pass=$_POST['pass'];


   $sql=mysqli_query($conn,"SELECT * FROM login where uname='$uname' and pass='$pass'");

   $row  = mysqli_fetch_array($sql);

    if(is_array($row))

    {

        #$_SESSION["name"] = $row['name'];

        $_SESSION["uname"]=$row['uname'];

        #$_SESSION["mail"]=$row['mail'];

        #$_SESSION["num"]=$row['num'];

        #$_SESSION["pass"]=$row['pass']; 

        header("Location: home.php"); 

    }

    else

    {

        echo "Invalid UserName / Password";

    }

}