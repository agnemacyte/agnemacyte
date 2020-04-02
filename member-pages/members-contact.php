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
        <title>Cheers! Contact </title>
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
						  <button class="dropbtn"> <a href="members-products.php">PRODUCTS</a><i class="fas fa-caret-down"></i></button>
						  <div class="dropdown-content">
							<a href="members-products.php">Spirits</a>
							<a href="members-products.php#wines">Wines</a>
							<a href="members-products.php#beers">Beers</a>
							<a href="members-products.php#non-alcoholic">Soft Drinks</a>
							<a href="members-products.php">All</a>
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
			<section class="about contact">

				<h1>CONTACT</h1>			
				<table>
					<tr>
						<th><i>Contact us:</i></th>
						<th><i>Find us:</i></th>
					</tr>
					<tr>
						<td><h3>Thank you for visiting Cheers!</h3><br>
							E-mail:
							<a href="#">CustomerService@cheers.com</a>
							<br>
							<br>
							Phone Number: +44729573659
							<br>
							<br>
							10 Collinton Road
							<br>
							Edinburgh, 
							<br>
							United Kingdom
							<br>
							93033
							<br>
							<br>
							<br>
							For information on our new products and deals, please follow us on:<br>
							<a href="#"><i class="fab fa-facebook-square"></i></a><a href="#"><i class="fab fa-instagram"></i></a><a href="#"><i class="fab fa-twitter-square"></i></a>
							<br>
						</td>
						<td>
						<div class="mapouter">
							<div class="gmap_canvas">
								<iframe width="415" height="383" id="gmap_canvas" src="https://maps.google.com/maps?q=10%20Colinton%20Road&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net/blog/elementor-pro-discount-code-review/"></a>
							</div>
							<style>.mapouter{position:relative;text-align:right;height:383px;width:415px;margin-left: auto;margin-right: auto;}.gmap_canvas {overflow:hidden;background:none!important;height:383px;width:415px;}</style>
						</div>
							</td>
					</tr>
				</table>
				</section>
		</main>
			<footer>
			<section class="footer">
				<table>
					<tr>
						<td>Copyright by<br>Agne Macyte<br>2019</td>
						<td><a href="members-contact.php">Contact Us</a></td>
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
   