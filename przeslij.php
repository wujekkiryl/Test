<?php
session_start();
mysql_connect("mysql.cba.pl","wujekkiryl","Zszynka1raz") or die(mysql_error()."Nie mozna polaczyc sie z baza danych.");
mysql_select_db("pikart") or die(mysql_error()."Nie można wybrac bazy danych.");
/*function dodaj_nazwisko_do_bazy($nazwisko, $login)
{
	echo $login." ".$nazwisko."</br>";
	$dodaj = "UPDATE `osoby` SET `nazwisko` = '$nazwisko[0]'  WHERE `nazwa_uzytkownika` = '$login'";
	$dodajWpis = mysql_query($dodaj) or die (mysql_error()."Błąd 1 ");
}
function dodaj_imie_do_bazy($imie, $login)
{
	$dodaj = "UPDATE `osoby` SET `imie` = '$imie'  WHERE `nazwa_uzytkownika` = '$login'" ;
    $dodajWpis = mysql_query($dodaj) or die (mysql_error()."Błąd 3");
   
}
function dodaj_wiek_do_bazy($wiek, $login)
{
	$dodaj = "UPDATE `osoby` SET `wiek` = $wiek  WHERE `nazwa_uzytkownika` = '$login'";
    $dodajRekord = mysql_query($dodaj) or die (mysql_error()."Błąd 2 ");
}*/
if (empty($_SESSION['krok']))
{
	$_SESSION['krok'] = 'imie';
}
echo "Krok = ".$_SESSION['krok']."</br>";
$login = $_SESSION['uz'];
/*$Imie = mysql_fetch_array(mysql_query("SELECT `imie` FROM `osoby` WHERE `nazwa_uzytkownika` = '$login'"));
$Nazwisko = mysql_fetch_array(mysql_query("SELECT `nazwisko` FROM `osoby` WHERE `nazwa_uzytkownika` = '$login'")); 
$Wiek = mysql_fetch_array(mysql_query("SELECT `wiek` FROM `osoby` WHERE `nazwa_uzytkownika` = '$login'"));
$imie = $Imie['imie'];
$nazwisko = $Nazwisko['nazwisko'];
$wiek = $Wiek['wiek'];
echo $imie."</br>";
echo $nazwisko."</br>";
echo $wiek."</br>";
echo "Krok = ".$_SESSION['krok']."</br>";*/
if (isset($_POST['imie']))
{
	$imie = $_POST['imie'];
}
if (isset($_POST['nazwisko']))
{
	$nazwisko = $_POST['nazwisko'];
}
if (isset($_POST['wiek']))
{
	$wiek = $_POST['wiek'];
}
if ($_SESSION['krok'] == 'imie' )
{
	echo "instrukcja 1</br>";
	$dodaj = "UPDATE `osoby` SET `imie` = '$imie'  WHERE `nazwa_uzytkownika` = '$login'";
	$dodajWpis = mysql_query($dodaj) or die (mysql_error()."Błąd 1 ");
	$_SESSION['krok'] = 'nazwisko';
	echo $imie."</br>";
	echo "Krok = ".$_SESSION['krok']."</br>";
}
elseif ($_SESSION['krok'] == 'nazwisko' ) 
{
	echo "instrukcja 2</br>";
	$dodaj = "UPDATE `osoby` SET `nazwisko` = '$nazwisko'  WHERE `nazwa_uzytkownika` = '$login'" ;
    $dodajWpis = mysql_query($dodaj) or die (mysql_error()."Błąd 3");
	$_SESSION['krok'] = 'wiek';
	echo $nazwisko."</br>";
	echo "Krok = ".$_SESSION['krok']."</br>";
}
elseif ($_SESSION['krok'] == 'wiek' ) 
{
	echo "instrukcja 3	</br>";
	$dodaj = "UPDATE `osoby` SET `wiek` = '$wiek' WHERE `nazwa_uzytkownika` = '$login'" ;
    $dodajWpis = mysql_query($dodaj) or die (mysql_error()."Błąd 3");
	$_SESSION['krok'] = 'ankieta';
	echo $wiek."</br>";
	echo "Krok = ".$_SESSION['krok']."</br>";
}

switch ($_SESSION['krok']) 
{
	case 'imie':
	{
		header("Location: imie.php");
		break;
	}
	case 'nazwisko':
	{
		header("Location: nazwisko.php");
		break;
	}
	case 'wiek':
	{
		header("Location: wiek.php");
		break;
	}
	case 'ankieta':
	{
		header("Location: ankieta.php?ankieta=wypelniona");
		break;
	}
}

?>