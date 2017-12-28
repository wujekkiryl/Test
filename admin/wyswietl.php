<?php
mysql_connect("mysql.cba.pl","wujekkiryl","Zszynka1raz") or die(mysql_error()."Nie mozna polaczyc sie z baza danych.");
mysql_select_db("pikart") or die(mysql_error()."Nie można wybrac bazy danych.");
define('ILOSC_WYNIKOW_NA_STRONIE', 10);
if (!isset($_GET['porcja']))
{
	$_GET['porcja'] = 0;
}


$SQL = "SELECT SQL_CALC_FOUND_ROWS * 
       FROM osoby 
       ORDER BY $sortowanie ASC 
       LIMIT ".mysql_escape_string((int)$_GET['porcja']*ILOSC_WYNIKOW_NA_STRONIE).",".ILOSC_WYNIKOW_NA_STRONIE;
$RES = mysql_query($SQL) or die(mysql_error()."Błąd zapytania"); // wykonujemy zapytanie
	echo '<div class="row align-items-center">';
	echo '<div class="col-sm-1"><b>ID</b></div>';
	echo '<div class="col-sm-2"><b>Nazwa użytkownika</b></div>';
	echo '<div class="col-sm-2"><b>Imie</b></div>';
	echo '<div class="col-sm-2"><b>Nazwisko</b></div>';
	echo '<div class="col-sm-2"><b>Wiek</b></div>';
	echo '</div>';
while($AFR = mysql_fetch_assoc($RES)){
	echo '<div class="row align-items-center">';
	echo '<div class="col-sm-1">'.$AFR['id'].'</div>';
	echo '<div class="col-sm-2">'.$AFR['nazwa_uzytkownika'].'</div>';
	echo '<div class="col-sm-2">'.$AFR['imie'].'</div>';
	echo '<div class="col-sm-2">'.$AFR['nazwisko'].'</div>';
	echo '<div class="col-sm-2">'.$AFR['wiek'].'</div>';
	echo '</div>';
}

$SQL = "SELECT FOUND_ROWS() as Ilosc";
$RES= mysql_query($SQL);
list($iloscWpisow) = mysql_fetch_row($RES);
  
//jeśli nie jesteśmy na pierwszej stronie
if($_GET['porcja']>0){ 
    //wyswietlamy link do poprzedniej strony
   echo '<a class = "btn btn-primary" href="?porcja='.($_GET['porcja']-1).'">Poprzednie</a> ';
}
 
for($i = 0;$i<=floor($iloscWpisow/ILOSC_WYNIKOW_NA_STRONIE);$i++){
   echo '<a class = "btn btn-primary" href="?porcja='.($i).'">'.($i+1).' </a> ';
}
//jeśli nie jesteśmy na ostatniej stronie
if($_GET['porcja']<floor($iloscWpisow/ILOSC_WYNIKOW_NA_STRONIE)){ 
  //wyświetlamy link do nastepnej strony
   echo ' <a class = "btn btn-primary" href="?porcja='.($_GET['porcja']+1).'">następne</a>';
}
?>