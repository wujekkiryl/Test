<?php
session_start();
if (empty($_SESSION['uz']))
{
	header("Location: wyloguj.php");
}
$login = $_SESSION['uz'];
?>
<!doctype html>
<html lang="pl_PL">
	<head>
		<title>Strona testowa</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	</head>
	<body>
	<div class="container">
		<div class="row justify-content-md-center">  	
			<div class="col-md-6">
				<h1 class="text-center">Witaj <b><?php echo $login; ?></b>!</h1>
			</div>
			<div class="col-md-2 col-md-offset-4">
				<a href="wyloguj.php">WYLOGUJ</a>
			</div>
  		</div>  	
  	</div> 
