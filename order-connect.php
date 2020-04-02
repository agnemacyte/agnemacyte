<?php
session_start();

//start the connection

$hostname = "localhost";
$username = "40446201";
$password = "";
$database = "orders";
// Connect to the database
$connect = mysqli_connect($hostname, $username, $password, $database);


// Check connection
if (mysqli_connect_errno())  {
   die('Could not connect: ' . mysqli_connect_error());
}

//declare variables
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$age = $_POST['age'];
$address = $_POST['address'];
$postcode = $_POST['postcode'];
$spirits = $_POST['spirits'];
$quantity1 = $_POST['quantity1'];
$wines = $_POST['wines'];
$quantity2 = $_POST['quantity2'];
$beers = $_POST['beers'];
$quantity3 = $_POST['quantity3'];
$softDrinks = $_POST['softDrinks'];
$quantity4 = $_POST['quantity4'];
$additional = $_POST['additional'];



// Insert the data into the table "orders1".

$query = "INSERT INTO orders1 (firstName, lastName, email, age, address, postcode, spirits, quantity1, wines, quantity2, beers, quantity3, softDrinks, quantity4, additional) VALUES ('$firstName','$lastName','$email','$age','$address','$postcode','$spirits','$quantity1','$wines','$quantity2','$beers','$quantity3','$softDrinks','$quantity4','$additional')";

if (!mysqli_query($connect, $query)) die('Insert did not work: ' . mysqli_error($connect));

if (isset($_POST['submit'])){
	header('Location: confirmation.php');
}

if(isset($_SESSION['username2'])){
	header('location: member-pages/members-confirmation.php');
}


?>