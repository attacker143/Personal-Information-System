<!DOCTYPE html>

<html>

<head>

	<title>

		

	</title>

</head>

<body background="123.jpg">


	<h1 style="text-align: center;font-weight: bold;color: black;"> ****..........Create Your Account ........ ****</h1>


	<form method="POST" action="signup.php" autocomplete="off" style="text-align: center;margin-top: 100px;font-weight: bold;">

		NAME  <input type="text" name="name" required="" placeholder="Enter Your Name" style="padding: 5px;">

		<br>

		<br>

		USERNAME  <input type="text" name="uname" required="" placeholder="Enter Your Username" style="padding: 5px;margin-top: 10px;margin-right: 40px;">

		<br>

		<br>

		EMAIL  <input type="email" name="mail" required="" placeholder="Enter Your Email" style="width: 200px;">

		<br>

		<br>

		NUMBER  <input type="number" name="num" required="" placeholder="Enter Your Number" style="padding-right: 14px; width: 200px;">

		<br>

		<br>

		PASSWORD  <input type="password" name="pass" required="" placeholder="Enter Your Password" style="padding-right: 40px;height: 30px;width: 200px;">

		<br>

		<br>

		<br>

		<input type="submit" name="signup" value="Create" style="background-color: red;color: black;height: 30px;width: 70px;font-weight: bold;">

	</form>

	<p style="text-align: center;">Already Created Your Account  <a href="login.php">login</a></p>

</body>

</html>

<?php

include('config.php');

if (isset($_POST['signup']))

 {

  $name=$_POST['name'];

  $uname=$_POST['uname'];

  $mail=$_POST['mail'];

  $num=$_POST['num'];

  $pass=$_POST['pass'];


  $sql=" INSERT into login values ('$name','$uname','$mail','$num','$pass')";


  if (mysqli_query($conn,$sql))

   {

  	header("location:login.php");

  }

  else

  {

  	echo "Not Created Your Account";

  }


}

?>