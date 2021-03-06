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
			<div class="col-md-12">
				<h1 class="text-center">Witaj!</h1>
			</div>
  		</div>  	
  </div> 	
  	<main class="container">
  		<form action="login.php" method="POST">
	  		<div class="row justify-content-md-center">  	
				<div class="col-md-12">
					<h1 class="text-center">Zaloguj się</h1>
				</div>
			</div>
			<div class="row align-items-center">
	 			<div class="col-md-6 align-self-center">
					<h2>Nazwa użytkownika:</h2>	 			
				</div>
	 			<div class="col-md-6 align-self-center">
	 				<input type="text" placeholder="Nazwa użytkownika" required name="login">
	 			</div>		 		
		 	</div>
		 	<div class="row align-items-center">	 	
	 			<div class="col-md-6 align-self-center">
	 				<h2>Hasło:</h2> 
	 			</div>
	 			<div class="col-md-6 align-self-center">
	 				<input type="password" placeholder="Hasło" required name="haslo">
	 			</div>
			</div> 
			<div class="row align-items-center">	 	
	 			<div class="col-md-6 ml-md-auto">
	 				<input type="submit" class="btn btn-primary" value="Zaloguj">
	 			</div>
			</div> 
		</form>
  	</main>
  </body>
</html>