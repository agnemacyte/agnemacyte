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
        <title>Cheers! About </title>
        <link href="../styles.css" type="text/css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Alice&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/16a97854c0.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <header>
           <nav class="navigation">
				<div class ="logo_div">
				<img src="../Images/logo.png" alt="This is a logo" class="logo">
				</div>
                <div class="navbar-links">
					<ul>
						<div class="nav">
						<li class="nav"><a href="members-only.php">HOME</a></li>
						<li class="nav"><a href="members-about.php"> ABOUT </a></li>
						<div class="dropdown">
						  <button class="dropbtn"><a href="members-products.php">PRODUCTS</a><i class="fas fa-caret-down"></i></button>
						  <div class="dropdown-content">
							<a href="members-products.php">Spirits</a>
							<a href="members-products.php#wines">Wines</a>
							<a href="members-products.php#beers">Beers</a>
							<a href="members-products.php#non-alcoholic">Soft Drinks</a>
							<a href="members-products.php">All</a>
						  </div>
						</div>
						<li class="nav"><a href="contact.html">CONTACT</a></li>
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
			<section class="about">

				<h1>YOUR DRINKS ARE ON THE WAY, <?php echo $_SESSION['username2']; ?></h1>
					<h2>We have got your order and will deliver it to you within 1 hour.</h2>
				<br>
				<br>
					<h2>Redirecting to Home page...</h2>
				<p>

			<?php
			header( "refresh:4;url=members-only.php" );
					?>


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
   