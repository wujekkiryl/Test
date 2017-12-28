<?php
session_start();
if (isset($_POST['sortowanieTyp']))
{
  $_SESSION['sortowanieTyp'] = $_POST['sortowanieTyp']; 
  $sortowanie = $_SESSION['sortowanieTyp'];
}
else
{
  $sortowanie = $_SESSION['sortowanieTyp'];
}
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
  			<div class="col-md-12">
  				<h1 class="text-center">Witaj Administratorze!</h1>
  			</div>
    	</div>  	
    </div>
    <div class="container">
      <form action="administrator.php" method="POST" id="sort">
        <div class="row align-items-center">
          <div class="col-sm-auto">
            Sortuj:
              <?php
              include("sort.php");
              ?>
          </div>
          <div class="col-sm-auto">
            <select name="sortowanieKolejnosc" form="sort">
              <option value="rosnaco">Rosnąco</option>
              <option value="malejaco">Malejąco</option>
            </select>
          </div>
          <div class="col-sm-auto">
            <input type="submit" class="btn btn-primary" value="Sortuj">
          </div>
        </div>
      </form>
      <?php 
        include ("wyswietl.php"); 
      ?>
    </div> 	
  </body>
</html>