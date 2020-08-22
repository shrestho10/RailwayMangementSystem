<?php
session_start();
if(isset($_SESSION['mail']))
{
	session_destroy();
	header("Location:login.php");
  }

?>