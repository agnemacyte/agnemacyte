<?php
session_start();

$username2 = "";
$password2 = "";

//declare variables
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


// If "login" button pressed, check database for credentials.

if (isset($_POST['login'])){

  $username2 = '';  // Reset all variables
  $password2 = '';

  if (!empty($_POST['username2'])){
    $username2 = $_POST['username2'];
  }
  if (!empty($_POST['password2'])){
    $password2 = $_POST['password2'];
  }

  // Are there any matches in the database?
  $query = "select * from accounts1 where username2='$username2' and password2='$password2'";
  $result = mysqli_query($connect, $query);
  $num = mysqli_num_rows($result); // number of matches

  // If there are matches, then set 'username' in the 'session[]' array to non-zero.
  // This is how the 'privelige' pages know that somebody is logged in.
  // The header command will not work if an html page has already started

  if ($num > 0) {
	$_SESSION['username2'] = $username2;
  } 
	
	if (isset($_SESSION['username2'])){
	header('location: member-pages/members-only.php');		
	} else {
		header('location: register-form.php');
	}
	  
	
} 
  

?>