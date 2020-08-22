<?php
include_once 'common/class.common.php';

include_once "db_connnection.php";
ob_start();

session_start();
//$_SESSION['mail'] =$_GET['mail'];
if(isset($_SESSION['mail']))
{
  header('Location:adminsection.php');
  }
  else
  {
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Railways</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body style="background-image: url('./assets/img/header-bg.jpg');background-size: 100%" id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">Bangladesh Railways</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul style="background-color: rgba(255,1,1,1);"class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="viewtrains.php">Trains</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="viewschedule.php">Schedule</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">Route</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="buyticket.php">Ticket</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
     

  

  <script src="js/jquery-2.1.4.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>




<link rel="stylesheet" href=css/bootstrap.css>

<link rel="stylesheet" href=css/style.css>


<div class="panel panel-default">

	<script type="text/javascript">



		function validatePassword(){

		var password = document.getElementById("txtPassword"); 
		var confirm_password = document.getElementById("txtConfirmPassword");

	
		  if(password.value != confirm_password.value) {
		    confirm_password.setCustomValidity("Passwords Don't Match");
		  } else {
		    confirm_password.setCustomValidity('');
		  }
		}


	</script>
    
    <div style="margin-top: 100px;color: white;margin-left: 10px;" class="panel-heading"><h2>Please Sign In</h2></div>
    
    <div class="panel-body">

	<div  id="form">
		<form style="color:white;" method="post" class="form-horizontal">

			
	
			<div class="form-group">
              	<label class="control-label col-sm-4" >Email:</label>
              	<div class="col-sm-6">  		
				<input type="text" name="mail" class="form-control" placeholder="Email"  required/>
				</div>
			</div>

			<div class="form-group">
              	<label class="control-label col-sm-4" >Password:</label>
              	<div class="col-sm-6">	
				<input type="text" name="password" class="form-control" placeholder="Password" required/>
				</div>
			</div>
 <div class="form-group">        
              <div class="col-sm-offset-2 col-sm-10">

            <button type="submit" value="request" name="Post">Sign In</button>

          </div>
            </div> 

   <?php
$mail='a';
if(isset($_POST['Post'])){
      $mail = $_POST['mail'];
      $password= ($_POST['password']);

   }

    $conn1=opencon();

$sql1="SELECT * FROM user";
$r=mysqli_query($conn1,$sql1);
while($rows=mysqli_fetch_array($r))
{




$eid=$rows['email'];
$pass=$rows['pass'];

if($eid==$mail && $pass== $password)
{
  session_start();
  $_SESSION['mail']=$mail;

  header('Location:adminsection.php?mail='.$mail);
}

if(isset($_POST['Post']))
{
  if($eid!=$mail || $pass= $password)
{
  //echo "Wrong user name or password";
}

}
}
}
 
  ?>

  <a href="user_new.php">Create an account </a>

     