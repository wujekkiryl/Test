<?php
include("naglowek.php");
if (isset($_GET['ankieta']))
{
	$ankietaWypelniona = 'Dziękuję za wypełnienie ankiety';
	$button = 'Popraw odpowiedzi';
}
?>
<div class="container">
		<div class="row justify-content-md-center">  	
			<div class="col-md-12">
				<p><?php 
				$ankietaNiewypelniona = 'Zapraszam do wypełnienia ankiety';
				if (isset($_GET['ankieta']))
				{
					echo $ankietaWypelniona;
				}
				else echo $ankietaNiewypelniona;
				?>	
				</p>
				<a href="imie.php" class="btn btn-primary">
				<?php
					if (isset($_GET['ankieta']))
					{
						echo $button;
					}
					else echo 'Wypełnij ankietę';	
				?>	
				</a>
			</div>
  		</div>  	
  </div>
</body>
</html>