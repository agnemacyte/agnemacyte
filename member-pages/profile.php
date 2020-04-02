<?php
session_start();

if (!isset($_SESSION['username2'])) {
	header("location: index.html");
    die();
}
?>

<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="utf-8" name="description" content="The website is an online shop for alcoholic drinks that will be delivered to your door within 1 hour" name="keywords" content="Drinks, delivery, fast-delivery, alcohol-delivery, alcohol, Edinburgh">
        <title>Cheers! Drinks in 1 hour </title>
        <link href="../styles.css" type="text/css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Alice&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/16a97854c0.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <header>
       		<nav class="navigation">
				<div class ="logo_div">
				<img  src="../Images/logo.png" alt="This is a logo" class="logo">
				</div>
                <div class="navbar-links">
					<ul>
						<div class="nav">
						<li class="nav"><a href="members-only.php">HOME</a></li>
						<li class="nav"><a href="about.php"> ABOUT </a></li>
						<div class="dropdown">
						  <button class="dropbtn"><a href="members-products.php">PRODUCTS</a><i class="fas fa-caret-down"></i></button>
						  <div class="dropdown-content">
							<a href="member-products.php">Spirits</a>
							<a href="member-products.php#wines" class="wines-achor">Wines</a>
							<a href="member-products.php#beers">Beers</a>
							<a href="member-products.php#non-alcoholic">Soft Drinks</a>
							<a href="member-products.php">All</a>
						  </div>
						</div>
						<li class="nav"><a href="members-contact.php">CONTACT</a></li>
						</div>
						<div class="nav-buttons">
							<li><a href="profile.php"><i class="fas fa-user"></i></a></li>
							<li><a href="members-order.php"><i class="fas fa-shopping-cart"></i></a></li>
							<li><a href="../logout.php"><i class="fas fa-sign-out-alt"></i></a></li>
							
						</div>
					</ul>
				</div>
            </nav>
        </header>
		<main>
			<section class="about login">
            <h1>Hi, <?php echo $_SESSION['username2']; ?></h1> 
			<h2>You can update your account details here if you wish to change it:</h2>
				<div id="registration">
					<table>
						<td>
							<form action="member-connect.php" method="POST" name="form3">					
							<label for="firstName2">First Name</label>
							<br>
							<br>
							<input type="text" name="firstName2" placeholder="Enter your name">
							<br>
							<br>		
							<label for="lastName2">Last Name</label>
							<br>
							<br>
							<input type="text" name="lastName2" placeholder="Enter your surname">
							<br>
							<br>
							<label for="email2">Email</label>
							<br>
							<br>
							<input type="email" name="email2" placeholder="Enter your email">
							<br>
							<br>
							<label for="username2">Username</label>
							<br>
							<br>
							<input type="text" name="username2" placeholder="Enter username">
							<br>
							<br>

							<label for="password2">Password</label>
							<br>
							<br>
							<input type="password" name="password2" placeholder="Enter Password">
							<br>
							<br>
							<button type="submit" name="update">UPDATE</button>
						</form>
						</td>
						</table>
						</div>
            <p>
            </p>
			</section>
		</main>
        <footer>
			<section class="footer">
				<table>
					<tr>
						<td>Copyright by<br>Agne Macyte<br>2019</td>
						<td><a href="contact.html">Contact Us</a></td>
						<td>
						<div class="socials">
							<a href="#"><i class="fab fa-facebook-square"></i></a>
							<a href="#"><i class="fab fa-instagram"></i></a>
							<a hred="#"><i class="fab fa-twitter-square"></i></a>	
					</div>
						</td>
					</tr>
				</table>
			</section>
		</footer>
    </body>
</html>