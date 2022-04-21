<?php


session_start();

if (!isset($_SESSION['uname']))

 {

	header("location:login.php");

}


?>

<!DOCTYPE html>

<html>

<head>

	<title>info.org</title>

</head>

<body background="1.jpg">

	<form method="POST" action="config.php" autocomplete="off">

		<p style="text-align: center;font-weight: bold;color: orange;font-size: 25px;">Personal Information System...</p>

<p style="text-align: center;font-weight: bold;"><a href="delete.php" style="text-decoration:none;color: white">DELETE</a>&nbsp,&nbsp,&nbsp,&nbsp<a href="logout.php" style="text-decoration:none;color: white">Logout </a></p>


<center>

	<table border="5px" bgcolor="pink" cellpadding="5px"  style="font-weight: bold; border-top-width: 10px; border-top-color: blue;border-bottom-color: blue;border-left-color: blue;border-right-color: blue ">

	<tr>

		<td> NAME : </td>

		<td><input type="text" name="n" required="" placeholder="Enter Your First Name"></td>

	</tr>

	<tr>

		<td>EMAIL : </td>

		<td><input type="email" name="mail" required=""  placeholder="Enter Your Email"></td>

	</tr>

	<tr>

		<td>NUMBER :</td>

		<td><input type="number" name="num" required="" placeholder="Enter Your Number"></td>

	</tr>

	<tr>

		<td>GENDER</td>

		<td>male<input type="radio" name="gen" value="m">

			female<input type="radio" name="gen" value="f"></td>

	</tr>

	<tr>

		<td>REGISTER NO : </td>

		<td><input type="text" name="rn" required="" placeholder="Enter Your Register No"></td>

	</tr>

	<tr>

		<td>BRANCH</td>

		<td>

			<select name="branch">

				<option>select branch</option>

				<option value="CSE">BE.CSE</option>

				<option value="MECH">BE.MECH</option>

				<option value="EEE">BE.EEE</option>

				<option value="CIVIL">BE.CIVIL</option>

			</select>

		</td>

	</tr>

	<tr>

		<td> YEAR :</td>

		<td>

			<select name="year" required="">

				<option>year</option>

				<option value="FIRST">FIRST</option>

				<option value="SECOND">SECOND</option>

				<option value="THIRD">THIRD</option>

				<option value="FOURTH">FOURTH</option>

			</select>

		</td>

	</tr>

	<tr>

		<td>SEMESTER :</td>

		<td>

			<select name="semester" required="">

				<option>semester</option>

				<option value="FIRST">FIRST</option>

				<option value="SECOND">SECOND</option>

				<option value="THIRD">THIRD</option>

				<option value="FOURTH">FOURTH</option>

				<option value="FIFITH">FIFITH</option>

				<option value="SIX">SIX</option>

				<option value="SEVENTH">SEVENTH</option>

				<option value="EIGHT">EIGHT</option>

			</select>

		</td>

	</tr>

	<tr>

		<td>DATE OF BIRTH (DD-MM-YYYY)</td>

		<td>

			<select name="dd" required="">

				<option>select date</option>

				<option value="1">1</option>

				<option value="2">2</option>

				<option value="3">3</option>

				<option value="4">4</option>

				<option value="5">5</option>

				<option value="6">6</option>

				<option value="7">7</option>

				<option value="8">8</option>

				<option value="9">9</option>

				<option value="10">10</option>

				<option value="11">11</option>

				<option value="12">12</option>

				<option value="13">13</option>

				<option value="14">14</option>

				<option value="15">15</option>

				<option value="16">16</option>

				<option value="17">17</option>

				<option value="18">18</option>

				<option value="19">19</option>

				<option value="20">20</option>

				<option value="21">21</option>

				<option value="22">22</option>

				<option value="23">23</option>

				<option value="24">24</option>

				<option value="25">25</option>

				<option value="26">26</option>

				<option value="27">27</option>

				<option value="28">28</option>

				<option value="29">29</option>

				<option value="30">30</option>

				<option value="31">31</option>

			</select>

			<select name="mm" required="">

				<option>select month</option>

				<option value="JAN">JAN</option>

				<option value="FEB">FEB</option>

				<option value="MAR">MAR</option>

				<option value="APR">APR</option>

				<option value="MAY">MAY</option>

				<option value="JUN">JUN</option>

				<option value="JUL">JUL</option>

				<option value="AUG">AUG</option>

				<option value="SET">SET</option>

				<option value="OCT">OCT</option>

				<option value="NOV">NOV</option>

				<option value="DEC">DEC</option>

		

			</select>

			<select name="yy" required="">

				<option>select year</option>

				<option value="2007">2007</option>

				<option value="2006">2006</option>

				<option value="2005">2005</option>

				<option value="2004">2004</option>

				<option value="2003">2003</option>

				<option value="2002">2002</option>

				<option value="2001">2001</option>

				<option value="2000">2000</option>

				<option value="1999">1999</option>

				<option value="1998">1998</option>

				<option value="1997">1997</option>

				<option value="1996">1996</option>

			</select>

		</td>

		<tr>

			<td>ADDRESS:</td>

			<td>

				<input type="text" name="address" required="">

			</td>

		</tr>

	</tr>

</table>

</center>

<p style="text-align: center;"><input type="submit" name="submit" value="ADD" style="background-color: black;width: 60px;height: 40px;color: white;"></p>

</form>

</body>

</html>

<?php


if(isset($_POST['submit']))


{

	$n=$_POST['n'];

	$mail=$_POST['mail'];

	$num=$_POST['num'];

	$gen=$_POST['gen'];

	$rn=$_POST['rn'];

	$branch=$_POST['branch'];

	$year=$_POST['year'];

	$semester=$_POST['semester'];

	$dd=$_POST['dd'];

	$mm=$_POST['mm'];

	$yy=$_POST['yy'];

	$address=$_POST['address'];


	$sql=" INSERT into stdinfo values ('$n','$mail','$num','$gen','$rn','$branch','$year',

	'$semester','$dd, $mm ,$yy','$address')";

	#if($conn->query($sql))

	if(mysqli_query($conn,$sql))	

	{

		echo "data stored....";

	}

	else

	{

		echo "insert data fail";

	}

}

?>