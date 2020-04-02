<?php
session_start();


//declare variables
$firstName2 = $_POST['firstName2'];
$lastName2 = $_POST['lastName2'];
$email2 = $_POST['email2'];
$username2 = $_POST['username2'];
$password2 = $_POST['password2'];

//start the connection

$hostname = "localhost";
$username = "40446201";
$password = "";
$database = "accounts";
// Connect to the database
$connect = mysqli_connect($hostname, $username, $password, $database);


// Check connection
if (mysqli_connect_errno())  {
   die('Could not connect: ' . mysqli_connect_error());
}

if (!empty($_POST['firstName2'])){ $firstName2 = $_POST['firstName2'];}
if (!empty($_POST['lastName2'])){ $lastName2 = $_POST['lastName2'];}
if (!empty($_POST['email2'])){ $email2 = $_POST['email2'];}
if (!empty($_POST['username2'])){ $username2 = $_POST['username2'];}
if (!empty($_POST['password2'])){ $password2 = $_POST['password2'];}


// Insert the data into the table "accounts".

$query = "INSERT INTO accounts1 (firstName2, lastName2, email2, username2, password2) VALUES ('$firstName2','$lastName2','$email2', '$username2', '$password2')";
if (!mysqli_query($connect, $query)) die('Insert did not work: ' . mysqli_error($connect));

if (isset($_POST['submit2'])){
	header('Location: login.php');
}

?>