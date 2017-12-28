<?php
session_start();
if (empty($_SESSION['sortowanieTyp']))
{
  $_SESSION['sortowanieTyp'] = 'id';
}
header("Location: administrator.php");
?>