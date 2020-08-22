
<?php
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
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="schedule.php">Schedule Section</a></li>
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



//$id=$_SESSION["Id"];
//echo $id;
include_once 'common/class.common.php';
include_once 'common/class.util.php';

include_once "db_connnection.php";
$_SESSION["Id"]= $_GET['id'];



 $conn1=opencon();

$sql1="SELECT * FROM train  WHERE trainid='".$_SESSION["Id"]."'";
$r=mysqli_query($conn1,$sql1);


while($rows=mysqli_fetch_array($r))
{





$name=$rows['trainname'];




}











?>


<link rel="stylesheet" href=css/bootstrap.css>

<link rel="stylesheet" href=css/style.css>



<div class="panel col-md-10 col-md-offset-1" style="font-size: 16px; border-top: outset; border-left: outset;
                                border-bottom: inset; border-right: inset; margin-top: 50px;margin-left: 100px;color:white;">
    <div class="panel-heading" align="center">
        <h1><u><?php echo $name;?></u></h1>
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

                        <button type="submit" name="Post1" onclick="Confirm(this.form)" class="btn btn-primary">Create Schedule</button>
                        <?php
                            }
                            ?>
                    </div>
                </div>

  
</div>
</form>

<?php 
if(isset($_POST['Post1'])){
  

  $NewID=Util::getGUID();
  $Id =$_SESSION["Id"];
  $Date=$_POST['date'];
  $Date1=$_POST['date'];
 
  $conn1=opencon();
 $sql167="SELECT * FROM schedule where trainid='".$_SESSION["Id"]."'";
$r167=mysqli_query($conn1,$sql167);

$pos=0;
while($rows=mysqli_fetch_array($r167))
{
$Name=$rows['trainname'];
$routeid=$rows['routeid'];
$routetype=$rows['routetype'];
$stationid=$rows['stationid'];
$timein=$rows['timein'];
if($pos==0)
{
  $p= $timein;  
}






$timeout=$rows['timeout'];
if($p>$timein)
{
    $timeindate = strtotime("1 day",strtotime($Date1));
    $timeindate =  date("Y-m-d",$timeindate);
}

else

{
    $timeindate= $Date1;
}



if($p>$timeout)
{
    $timeoutdate = strtotime("1 day",strtotime($Date1));
    $timeoutdate =  date("Y-m-d",$timeoutdate);
}

else

{
    $timeoutdate= $Date1;
}

if($p > $timein  ||$p > $timeout)
{

$Date =strtotime("1 day",strtotime($Date1));

$Date = date("Y-m-d",$Date);



}


 $conn1=opencon(); 




$sql = "INSERT into schedulebydate(id,trainid,trainname,routeid,routetype,stationid,timein,timeout,timeindate,timeoutdate,date) VALUES ('$NewID','$Id','$Name','$routeid','$routetype','$stationid','$timein','$timeout','$timeindate','$timeoutdate','$Date')";

$query=mysqli_query($conn1,$sql);
$pos++;
}
   








  
  }




   





  $conn1=opencon();

$sql1="SELECT * FROM schedulebydate where trainid='".$_SESSION["Id"]."'";
$r=mysqli_query($conn1,$sql1);
 ?>
 </div>

    <div class="panel-body">

            <table style="color: white;background-color: gray;" class="table table-bordered">
                <tr>
                    
                    <th> TrainNo</th>
                    <th> TrainName</th>
                    <th> Route ID</th>
                    <th> Route Name</th>
                    <th> Route Type</th>
                    <th> Station</th>
                    <th> Date</th>
                    <th> TimeIn</th>
                    <th> TimeInDate</th>
                    <th> TimeOut</th>
                    <th> TimeOutDate</th>
                    
                  
                    
                </tr>
               

<?php
while($rows=mysqli_fetch_array($r))
{



$newid=$rows['id'];
$id=$rows['trainid'];
$name=$rows['trainname'];
$station=$rows['stationid'];
$routeid=$rows['routeid'];
$routetype=$rows['routetype'];
$date=$rows['date'];
$timein=$rows['timein'];
$timeout=$rows['timeout'];
$timeindate=$rows['timeindate'];
$timeoutdate=$rows['timeoutdate'];




$conn1=opencon();

$sql2="SELECT * FROM route  WHERE routeid='".$routeid."'";
$r1=mysqli_query($conn1,$sql2);


while($rows=mysqli_fetch_array($r1))
{





$routename=$rows['routename'];




}





 
  ?>


<tr>
                            
                            
                            <td><?php echo $id;?>
                            </td>
                            <td><?php echo $name;?>
                            </td>
                            <td><?php echo $routeid;?>
                            </td>
                            <td><?php echo $routename;?>
                            </td>
                            <td><?php echo $routetype;?>
                            </td>
                            <td><?php echo $station;?>
                            </td>
                            <td><?php echo $date;?>
                            </td>
                            <td><?php echo $timein;?>
                            </td>
                             <td>
                            <?php echo $timeindate;?>
                            </td>

                            <td><?php echo $timeout;?>
                            </td>
                             <td>
                            <?php echo $timeoutdate;?>
                            </td>
                           >
                        

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
 

