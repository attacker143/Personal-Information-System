<?php


$dbhost="localhost";

$dbuser="root";

$dbpass="";

$dbname="project1";


$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if (! $conn) 

{

	die('could not connect : ' .mysqli_connect_error());

}

?>