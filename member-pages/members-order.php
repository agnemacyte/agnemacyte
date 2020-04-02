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
        <title>Cheers! Order </title>
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
			<section class="about order">
	<table>
				<form action="../order-connect.php" method="POST">
	<tr><h1>PLACE YOUR ORDER</h1></tr>		
		<tr><td><h2>Contact Details:</h2></td>
			<td><h2>Order Details:</h2></td>	
			</tr>
			<tr>
			<td>
			<label for="firstName">First Name</label>
			<br>
			<input type="text" name="firstName" placeholder="Enter your name" required>
			<br>
			<br>
			<label for="lastName">Last Name</label>
			<br>
			<input type="text" name="lastName" placeholder="Enter your surname" required>
			<br>
			<br>
			<label for="email">Email</label>
			<br>
			<input type="email" name="email" placeholder="Enter your email" required>
			<br>
			<br>
			<label for="age">Please confirm you are over 18 by entering your age</label>
			<br>
			<input type="number" name="age" placeholder="Enter your age" required min="18">
			<br>
			<br>
			<label for="address">Address</label>
			<br>
			<input type="text" name="address" placeholder="Enter your address" required>
			<br>
			<input class="readonly" type="text" readonly="readonly" name="address1" value ="Edinburgh only" >
			<br>
			<br>
			<label for="postcode">Postcode</label>
			<br>
			<input type="text" name="postcode" maxlength="8" required>
			</td>
			<td>
			<label for="spirits">Spirits</label>
			<br>
			<select name="spirits">
			<option>None</option>
			<option>Gordons Gin 1l</option>
			<option>Tanqueray Gin 0,7l</option>
			<option>Russian Standard Vodka 1l</option>
			<option>Absolut Vodka 0,7l</option>
			<option>Tito's Vodka 1l</option>
			<option>Mount Gay Rum 1l</option>
			<option>Captain Morgan Rum 0,7l</option>
			<option>Bacardi Rum 0,7l</option>
			<option>Jack Daniel's Whisky 1l</option>
			<option>Jose Cuervo Tequila 1l</option>
			</select>
			&nbsp;
			<label for="quantity" class="quantity">Qty.</label>
			<input type="number" name="quantity1" min="0" max="5">
			<br>
			<br>
			<label for="wines">Wines</label>
			<br>
			<select name="wines">
			<option>None</option>
			<option>Burlesque Chardonnay 1l</option>
			<option>The Cloud Sauvingnon Blanc 1l</option>
			<option>Nirabell Pinot Grigio 1l</option>
			<option>Nirabell Rose 1l</option>
			<option>Ancora Rose 1l</option>
			<option>Cape Heights Malbec 1 l</option>
			<option>Staton Merlot 1l</option>
			<option>The Cloud Pinot Noir 1l</option>
			<option>Coller Prosecco 1l</option>
			<option>Moet Champagne 1l</option>
			</select>
			&nbsp;
			<label for="quantity" class="quantity">Qty.</label>
			<input type="number" name="quantity2" min="0" max="5">
			<br>
			<br>
			<label for="beers">Beers</label>
			<br>
			<select name="beers">
			<option>None</option>
			<option>Corona 4 Pack</option>
			<option>Stella Artois 6 Pack</option>
			<option>Peroni 4 Pack</option>
			<option>Brewdog Pink IPA 0,3l</option>
			</select>
			&nbsp;
			<label for="quantity" class="quantity">Qty.</label>
			<input type="number" name="quantity3" min="0" max="5">
			<br>
			<br>
			<label for="softDrinks">Soft Drinks</label>
			<br>
			<select name="softDrinks">
			<option>None</option>
			<option>Coca Cola 1 l</option>
			<option>Diet Coke 1l</option>
			<option>Tonic Water 1l</option>
			<option>Slimline Tonic 1l</option>
			<option>Sprite 1l</option>
			</select>
			&nbsp;
			<label for="quantity" class="quantity">Qty.</label>
			<input type="number" name="quantity4" min="0" max="5">
			<br>
			<br>
			<label for="additional">Additional request</label>
			<br>
			<p>Please use this space to specify <br>
			any additional products you wish <br>
				to order of the same type.</p>
			<textarea maxlength="300" name="additional"></textarea> 
			<br>
			<br>
			<button type="submit" name="submit">ORDER</button>
			</td>
			</tr>	
</form>
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