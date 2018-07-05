<?php
session_start();
if((isset($_SESSION['zalogowany']))&&($_SESSION['zalogowany']==true))
{
	header('Location: streksp.php');
	exit();
}
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title>cheers.com</title>
	<meta name="description" content="wpisz opis strony!" />
	<meta name="keywords" content="wpisz słowa kluczowe" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<link rel="stylesheet" href="streksp.css" type="text/css" />
	<link rel="stylesheet" href="css/fontello.css" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet" type="text/css">
	
</head>
<body>
<div id="container">
	<div class="rectangle">
		<div id="logo"><a href="index.php" class="tilelinkhtml">CHEERS!<i class="icon-beer"></i></a></div>
		<div id="logintile"><a href="" class="tilelinkhtml">log-in<i class=""></i></a></div>
		<div style="clear: both;"></div>
		<div class="topnav">
			<a class="active" href="index.php">Home</a>
			<a href="randomchat.php">Random-chat</a>
			<a href="contact.php">Contact</a>
			<a href="#about">About</a>
		</div>
	</div>
	<div id="content">
			<h1>Welcome to CHEERS!</h1><br />
			<h1>Start chat or login</h1>
			<div class="blocka" >
				<div class="blockb">
				<i class="icon-videocam"></i>
				<div style="clear: both;"></div>
				<button onclick="window.location.href='randomchat.php'">Random-chat</button>
				</div>
			</div>
			<div class="blocka" >
				<div class="blockc">
				<i class="icon-user"></i>
				<div style="clear: both;"></div>
				<button onclick="document.getElementById('id01').style.display='block'" >Login</button>

<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content animate" action="login.php" method="post">
    <div class="imgcontainer">
      
      <img src="img_avatar3.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="login"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="login" required>

      <label for="haslo"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="haslo" required>
        <?php
		if(isset($_SESSION['blad']))
			echo $_SESSION['blad'];
		?>
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
	
  </form>
  
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

<div style="clear: both;"></div>
<button onclick="window.location.href='rejestracja.php' " >Sign Up</button>

				</div>
			</div>
		</div>
	<div id="footer">
		Jakub Chmielewski &copy <br />Sorry for adds, we have to pay for servers
	</div>
	</div>
</body>
</html>