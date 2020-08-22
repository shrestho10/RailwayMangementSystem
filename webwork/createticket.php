<?php
ob_start();
session_start();
//$_SESSION['mail'] =$_GET['mail'];
if(isset($_SESSION['mail']))
{
 
  ?><p style="color:white;"> <?php echo $_SESSION['mail'];?></p>
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
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="train.php">Train Section</a></li>
                        <li class="nav-item"><a  class="nav-link js-scroll-trigger" href="createstation.php">Station Section</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="viewschedule.php">Schedule Section</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="route.php">Route Section</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="createticket.php">Ticket Section</a></li>
                        <li class="nav-item"><a style="padding-top: 20px;" class="nav-link js-scroll-trigger" href="#contact">Contact</a></li>
                    </ul>

 <a style="background-color: red;margin-left: 10px;height: 40px;width: 60px;padding-top: 7px;padding-left: 3px;color:white;" href="logout.php">Logout</a>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
     

  

  <script src="js/jquery-2.1.4.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>






<link rel="stylesheet" href=css/bootstrap.css>

<link rel="stylesheet" href=css/style.css>
<?php


include_once 'common/class.common.php';

include_once "db_connnection.php";


?>



<script type="text/javascript">
function Confirm(form){
alert("Notice submit successfully!"); 
form.submit();
}
</script>

<div class="panel col-md-10 col-md-offset-1" style="font-size: 16px; border-top: outset; border-left: outset;
                                border-bottom: inset; border-right: inset; margin-top: 50px;margin-left: 100px;color: white;">
    <div class="panel-heading" align="center">
        <h1><u>Create Ticket</u></h1>
    </div>
     <form class="form-horizontal" method="post">
                <div class="form-group">
                   <?php if(isset($_GET['edit1'])) 
                       $val= $date; 
                       else $val=""; ?>
                    <label for="userid" class="col-md-2 control-label">TrainID</label>
                    <div class="col-md-8">
                        <input type="text" name="trainid" class="form-control" placeholder="" value="<?php  echo $val ;?> "required>
                    </div>
                </div>


            
 <form class="form-horizontal" method="post">
                <div class="form-group">
                    <label for="station" class="col-md-2 control-label">Route Type:</label>
                    <div class="col-md-8">
                       <?php if(isset($_GET['edit1'])) 
                       $val=$routetype; 
                       else $val=""; ?>
                        <input type="text" name="routetype" class="form-control" placeholder="" value= "<?php echo $val ?>" required>
                    </div>
                </div>




                <form class="form-horizontal" method="post">
                <div class="form-group">
                    <label for="date" class="col-md-2 control-label">Date</label>
                    <div class="col-md-8">
                       <?php if(isset($_GET['edit1'])) 
                       $val= $date; 
                       else $val=""; ?>
                        <input type="date" name="date" class="form-control" placeholder="" value= <?php echo $val ?> required>
                    </div>
                </div>

                




                <div id="form" class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">

                        <?php
                            if(isset($_GET['edit1']))
                            {
                                ?>
                                <button type="submit" name="Update" class="btn btn-primary">Update</button>
                                <?php
                            }
                            else
                            {
                                ?>

                        <button type="submit" name="Post1" onclick="Confirm(this.form)" class="btn btn-primary">Post</button>
                        <?php
                            }
                            ?>
                    </div>
                </div>

  
</div>
</form>
<!--
	Here Start the work

-->

<?php
include_once 'common/class.common.php';

include_once "db_connnection.php";
  
if(isset($_POST['Post1'])){
  $CreateTicket = new CreateTicket();

  
  $CreateTicket->setTrainID($_POST['trainid']);
  $CreateTicket->setDate($_POST['date']);
   $Id = $CreateTicket->getTrainID();
    $Date = $CreateTicket->getDate();
    $RouteType = $_POST['routetype'];
   
$conn1=opencon(); 

$sqlnew="SELECT * FROM traindetails WHERE trainid = '".$Id."'";
$rnew=mysqli_query($conn1,$sqlnew);
$newvar=0;


while($rows=mysqli_fetch_array($rnew))
{

$newvar++;





$noofbogie=$rows['noofbogie'];
$seattypeno=$rows['seattypeno'];



$sqlnew1="SELECT * FROM seattype WHERE seattypeid = '".$seattypeno."'";
$rnew1=mysqli_query($conn1,$sqlnew1);

$rownew=mysqli_fetch_array($rnew1);

$noofseats=$rownew['seatsperbogie'];
$seattypename=$rownew['seattypename'];

if($newvar==1)
{
  $sum=0;
  $j=0;
}


for($i=1; $i<=($noofseats * $noofbogie ) ; $i++ )
{
$ticketid= $sum + $i;

if($i<= $noofseats)
{
  $k=$j+1;
}

else if(($i % $noofseats) ==0)
{
  $k=$j+(int)($i/$noofseats);
}

else
{
  $k=$j+(int)(($i/$noofseats))+1;
}

$no ="NA";
$sqllast = "INSERT into createticket(ticketid,trainno,routetype,bogieno,tickettype,date,booking,passengername,phoneno) VALUES ('$ticketid','$Id','$RouteType','$k','$seattypename','$Date','$no','$no','$no')";

$query=mysqli_query($conn1,$sqllast);

}

$sum = $sum+$i-1;
$j= $j+$noofbogie;




 
  








  
  }
}





$conn1=opencon();

$sql1="SELECT * FROM train";
$r=mysqli_query($conn1,$sql1);
 ?>
 </div>

    <div class="panel-body">

            <table style="color: white; background-color: gray;" class="table table-bordered">
                <tr>
                    
                    <th>   TrainNo</th>
                    <th>   TrainName</th>
                    <th>Ticket  </th>
                    
                  
                    
                </tr>
               

<?php
while($rows=mysqli_fetch_array($r))
{




$id=$rows['trainid'];
$name=$rows['trainname'];


 
  ?>


<tr>
                            
                            
                            <td><?php echo $id;?>
                            </td>
                             <td>
                            <?php echo $name;?>
                            </td>

                            <td><a href="eachtrainticket.php?id= <?php echo $id;?>" onclick="return ; ">Ticket</a></td>
                            
                        

                            </tr>

                          


<?php
}
?>

</table>

    </div>
</div>
<html>

<?php

}
else
{
  header("Location:login.php");
}
 

 


 
