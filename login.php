<?php 
session_start();
mysql_connect("mysql.cba.pl","wujekkiryl","Zszynka1raz") or die(mysql_error()."Nie mozna polaczyc sie z baza danych.");
mysql_select_db("pikart") or die(mysql_error()."Nie można wybrac bazy danych.");
$login = $_POST['login'];
$haslo = $_POST['haslo'];
$check = mysql_fetch_array(mysql_query("SELECT COUNT(*) FROM `osoby` WHERE `nazwa_uzytkownika` = '$login' AND `haslo` = '$haslo'")); 
if ($check[0] == 0) 
{
	header("Location: index.php");
}
else 
{
	$_SESSION['uz'] = $login ;
	header("Location: ankieta.php");
}
?>