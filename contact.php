<?php
session_start();
if((isset($_SESSION['zalogowany']))&&($_SESSION['zalogowany']==true))
{
	header('Location: contactlogged.php');
	exit();
}
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
<meta  charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title>cheers.com</title>
	<meta name="description" content="wpisz opis strony!" />
	<meta name="keywords" content="wpisz słowa kluczowe" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<link rel="shortcut icon" href="file:///C:/Users/kubac/Desktop/stronaeksp/contact.html/favico_azH_icon">
	<link rel="stylesheet" href="contact.css" type="text/css" />
	<link rel="stylesheet" href="css/fontello.css" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet" type="text/css">
	
</head>
<body >
<div id="container">
	<div class="rectangle">
		<div id="logo"><a href="index.php" class="tilelinkhtml">CHEERS!<i class="icon-beer"></i></a></div>
		<div id="logintile"><a href="" class="tilelinkhtml">log-in<i class=""></i></a></div>
		<div style="clear: both;"></div>
		<div class="topnav">
			<a  href="index.php">Home</a>
			<a  href="randomchat.php">Random-chat</a>
			
			<a class="active" href="contact.php">Contact</a>
			<a href="#about">About</a>
		</div>
	</div>
	<div id="content">
		<h1>Need help? Contact us...</h1>
		<div id="formularz">

			<form method="post" action="contaktpolecenie.php">

				<label>Imię i nazwisko</label>	
				<input name="name" placeholder="Name">

				<label>Email</label>
				<input name="email" type="email" placeholder="mail">
            
				<label>Wiadomość</label>
				<textarea name="message" placeholder="Type message"></textarea>
            
				<input id="submit" name="submit" type="submit" value="Wyślij">
			</form>
		</div>

	</div>
	<div id="footer">
		Jakub Chmielewski &copy <br />Sorry for adds, we have to pay for servers
	</div>
</div>
</body>
</html>