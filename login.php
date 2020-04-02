<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="utf-8" name="description" content="The website is an online shop for alcoholic drinks that will be delivered to your door within 1 hour" name="keywords" content="Drinks, delivery, fast-delivery, alcohol-delivery, alcohol, Edinburgh">
        <title>Cheers! Login/Register </title>
        <link href="styles.css" type="text/css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Alice&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/16a97854c0.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <header>
           <nav class="navigation">
				<div class ="logo_div">
				<img src="Images/logo.png" alt="This is a logo" class="logo">
				</div>
                <div class="navbar-links">
					<ul>
						<div class="nav">
						<li class="nav"><a href="../index.html">HOME</a></li>
						<li class="nav"><a href="../about.html"> ABOUT </a></li>
						<div class="dropdown">
						  <button class="dropbtn"><a href="../products.html">PRODUCTS</a><i class="fas fa-caret-down"></i></button>
						  <div class="dropdown-content">
							<a href="../products.html">Spirits</a>
							<a href="../products.html#wines">Wines</a>
							<a href="../products.html#beers">Beers</a>
							<a href="../products.html#non-alcoholic">Soft Drinks</a>
							<a href="../products.html">All</a>
						  </div>
						</div>
						<li class="nav"><a href="contact.html">CONTACT</a></li>
						</div>
						<div class="nav-buttons">
							<li><a href="login.php"><i class="fas fa-sign-in-alt"></i></a></li>
							<li><a href="order.php"><i class="fas fa-shopping-cart"></i></a></li>
						</div>
					</ul>
				</div>
            </nav>
        </header>
		<main>
			<section class="about login">

				<h1>ACCOUNT</h1>			
				<table>
					<tr>
						<th class="right-align"><i>Log in:</i></th>
						<th><i>Not registered yet?</i></th>
					</tr>
					<tr>
						<td>
							<form action="login-connect.php" method="POST">
								<div class="right-align">
								<label for="username">Username</label>
								<br>
								<br>
								<input type="text" name="username2" placeholder="Enter Username" required>
								<br>
								<br>
								<label for="password">Password</label>
								<br>
								<br>
								<input type="password" name="password2" placeholder="Enter Password" required>
								<br>
								<br>
								<button type="submit" name="login">LOGIN</button>
								<label>
								<br>
								<br>
    							</label>
								</div>	
							</form>
						</td>	
						<td>
						<button type="submit">REGISTER HERE</button>
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
   