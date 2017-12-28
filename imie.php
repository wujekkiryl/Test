<?php
include("naglowek.php");
?>
<div class="container">
	<form action="przeslij.php" method="POST">
		<div class="row justify-content-md-center">  	
			<div class="col-md-6">
				<h2>Podaj Imie</h2> 
			</div>
			<div class="col-md-6 align-self-center">
				<input type="text" name="imie" required>
			</div>
		</div>
		<div class="row align-items-center">	 	
			<div class="col-md-6 ml-md-auto">
				<input type="submit" class="btn btn-primary" value="Dalej">
			</div>
		</div>
	</form> 
</div>