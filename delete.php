<!DOCTYPE html>

<html>

<head>

	<title>DELETE</title>

</head>

<body bgcolor="pink">

	<h1 style="text-align: center;">***..............DELETE YOUR RECORD............***</h1>

	<br>

	<br>

	<br>

	<br>

	<form method="POST" action="delete.php" autocomplete="off" style="text-align: center;font-weight: bold;font-family: arial;font-size: 20px;">

		REGISTER NO <input type="text" name="rn" required="" placeholder="Enter Correct Register No">

		<br>

		<p style="text-align: center;"><input type="submit" name="del" value="DELETE" style="background-color: black;color: white;height: 40px;width: 80px;"></p>

	</form>

</body>

</html>

<?php

session_start();

if (!isset($_SESSION['uname']))

 {

	header("location:login.php");

}

include('config.php');

if(isset($_POST['del']))

 {

	$rn=$_POST['rn'];


	$sql="DELETE from stdinfo where rn='$rn'" 

    if (mysqli_query($conn,$sql))

	 

	{

	   		echo "Record Delete Successfully....";

	}

    else

    	{

     		echo "could not deleted record : " .mysqli_error($conn);

    	}

     }

?>

<p style="text-align: center;"><img src="a.png" width="700px;" height="300px;"></p>