<?php 

session_start();

if(isset($_POST['emplacement']))
{
	$_SESSION['emplacement']=$_POST['emplacement'];
	header('Location: reservations.php');
}

?>

<html>

<head>
	<title> Faites votre réservation</title>
	<link href="camping.css" rel="stylesheet">
	<link rel="icon" href="../img/sardine.jpg">
</head>


<header>
	<ul>
		<li><a href="../index.php">Accueil</a></li>
	</ul>			
</header>

<body>
<section class="Reservations">


<div id="plage">
	<form method="post" action="lieu.php">
		<input name="emplacement" type="submit" value="La Plage">
	</form>
</div>
<div id="pins">
	<form method="post" action="lieu.php">
		<input name="emplacement" type="submit" value="Les Pins">
	</form>
</div>
<div id="maquis">
	<form method="post" action="lieu.php">
		<input name="emplacement" type="submit" value="Le Maquis">
	</form>
</div>


</section>
</body>