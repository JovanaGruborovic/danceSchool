<?php
	  
	  require('connection.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PRIJAVA</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="icon" href="Images/logo.png">
</head>
<body id="pozprijava">
	<header class="header">
		<a href="pocetna.html" class="logo">Škola plesa <span>Ritmo</span></a>
		<input class="menu-btn" type="checkbox" id="menu-btn" />
		<label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
		<ul class="menu">
			<li><a href="pocetna.html">POČETNA</a></li>
			<li><a href="plesovi.html">PLESOVI</a></li>
			<li><a href="prijava.html">PRIJAVA</a></li>
			<li><a href="kontakt.html">KONTAKT</a></li>
		</ul>
	</header>
	<br><br>
	<h1 class="naslov">PRIJAVA ZA KURS PLESA</h1>
	<form method="POST" action="function.php">
			<p>Ime</p><input type="text" name="name" placeholder="Vaše ime">
			<p>Prezime</p><input type="text" name="surname" placeholder="Vaše prezime">
			<p>E-mail</p><input type="email" name="email" placeholder="Unesite Vaš e-mail">
			<p>Odaberite ples:</p>

			<select name="course">
				<?php
				
					$destinacija=mysqli_query($connection,"SELECT * FROM course");
					while($red=mysqli_fetch_assoc($destinacija))
					{
						echo "<option value='".$red['id']."'>".$red['name']."</option>";
					}
				?>
    		</select>
			<br><br>
			<input type="submit" name="send" value="Pošalji">
			<input type="reset" value="Poništi">
	</form>

	<footer>
		<p>Škola plesa RITMO E-mail: skolaplesaritmo@gmail.com</p>
	</footer>

</body>
</html>