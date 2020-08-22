

<link rel="stylesheet" href=css/bootstrap.css>

<link rel="stylesheet" href=css/style.css>
<?php
ob_start();
include_once 'common/class.common.php';

include_once "db_connnection.php";
$_SESSION['Id']= $_GET['id'];
$_SESSION['Id1']= $_GET['id1'];
 $conn1=opencon(); 
$r1234=mysqli_query($conn1,$_SESSION['Id']);
if(mysqli_num_rows($r1234)!=0)
{ ?>
	<div class="panel-body">
    
            <table style="background-color: gray;color:white;margin-left: 10px;margin-right: 10px;" class="table table-bordered">
                <tr>
                    
                    <th>   TrainNo</th>
                    <th>   BogieNo</th>
                    <th>Ticket no </th>
                    <th>Route Type </th>
                     <th>Seat Type </th>
                    <th>Date </th>
                    
                  
                    
                </tr>
           
                
<?php 
}
$d=0;
while($rowss=mysqli_fetch_array($r1234)  )
{
 
 if($d>=$_SESSION['Id1'])
 	{break;}


  $TrNo = $rowss['trainno'];
  $TicketNo = $rowss['ticketid'];
  $BogieNo=$rowss['bogieno'];
  $Type=$rowss['tickettype'];
  $date1=$rowss['date'];
  $routetype=$rowss['routetype'];



   

?>

  <tr>
                            
                            
                            <td><?php echo $TrNo;?>
                            </td>
                             <td>
                            <?php echo $BogieNo;?>
                            </td>
                            <td>
                            <?php echo $TicketNo;?>
                            </td>
                            <td>
                            <?php echo $routetype;?>
                            </td>
<td>
                            <?php echo $Type;?>
                            </td>
                            <td>
                            <?php echo $date1;?>
                            </td>
                        </tr>

</div>
                            <?php
                            $d++;
                           

}
?>

<?php

 ?>
                            
                            <?php


  
  

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
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="viewroutes.php">Route</a></li>
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
    

    
    <div style="margin-top: 100px;" class="panel-body">

  <div style="color:white;background-color: black;" id="form">
    <form  method="post" class="form-horizontal">

      
  
      <div  class="form-group">
                <label class="control-label col-sm-4" >Name:</label>
                <div class="col-sm-6">      
        <input type="text" name="mail" class="form-control" placeholder="Name"  required/>
        </div>
      </div>

      <div class="form-group">
                <label class="control-label col-sm-4" >Mobile:</label>
                <div class="col-sm-6">  
        <input type="text" name="password" class="form-control" placeholder="Mobile" required/>
        </div>
      </div>
 <div class="form-group">        
              <div class="col-sm-offset-2 col-sm-10">

            <button type="submit" value="request" name="Post">Book</button>

          </div>
            </div> 

   <?php
$mail='a';
$ss=$TicketNo-$d+1;
if(isset($_POST['Post'])){
      $mail = $_POST['mail'];
      $password= ($_POST['password']);

   

    $conn1=opencon();

$sql1="UPDATE createticket SET passengername='".$mail."',phoneno='".$password."',booking='yes'  WHERE trainno='".$TrNo."' and routetype='".$routetype."'and date='".$date1."'and bogieno='".$BogieNo."' and  ( ticketid>='".$ss."'and ticketid<='".$TicketNo."') and booking='NA'";
$r=mysqli_query($conn1,$sql1);
  $conn1=opencon();
$sql12="SELECT * FROM createticket  WHERE trainno='".$TrNo."' and routetype='".$routetype."'and date='".$date1."'and bogieno='".$BogieNo."' and ( ticketid>='".$ss."'and ticketid<='".$TicketNo."')";
 header('Location:hellonew2.php?sqls='.$sql12);

}

