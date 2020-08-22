
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
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="route.php.php">Schedule Section</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">Route Section</a></li>
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






if(isset($_GET['edit1']))
{

  $Schedule = new Schedule();
  $Schedule->setID($_GET['edit1']);
 


  $Id = $Schedule->getID();
  
  


 $SQL = "SELECT * from schedule WHERE id='".$Id."'";
 $conn=opencon();
		$query3=mysqli_query($conn,$SQL);

		$rows=mysqli_fetch_array($query3);

		

	    $Id=$rows['trainid'];

        $name=$rows['trainname'];
         $routeid=$rows['routeid'];
         $routetype=$rows['routetype'];
          $station=$rows['stationid'];

      
        // $date=$rows['date'];

        $timein=$rows['timein'];
         $timeout=$rows['timeout'];
       // echo $id;
	    //echo $name;
       

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
                    <label for="userid" class="col-md-2 control-label">TrainID</label>
                    <div class="col-md-8">
                        <input type="text" name="trainid" class="form-control" placeholder="" value="<?php  echo$_SESSION["Id"]?> "required>
                    </div>
                </div>

                <form class="form-horizontal" method="post">
                <div class="form-group">
                    <label for="station" class="col-md-2 control-label">Station ID:</label>
                    <div class="col-md-8">
                       <?php if(isset($_GET['edit1'])) 
                       $val=$station; 
                       else $val=""; ?>
                        <input type="text" name="stationid" class="form-control" placeholder="" value= "<?php echo $val ?>" required>
                    </div>
                </div>


                <form class="form-horizontal" method="post">
                <div class="form-group">
                    <label for="routeid" class="col-md-2 control-label">Route ID:</label>
                    <div class="col-md-8">
                       <?php if(isset($_GET['edit1'])) 
                       $val=$routeid; 
                       else $val=""; ?>
                        <input type="text" name="routeid" class="form-control" placeholder="" value= "<?php echo $val ?>" required>
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



               

                <div class="form-group">
                    <label for="time" class="col-md-2 control-label">TimeIn</label>
                    <div class="col-md-8">
                        <?php if(isset($_GET['edit1'])) 
                       $val1= $timein; 
                       else $val1=""; ?>
                     
                        <input type="time" name="timein" class="form-control" placeholder="" value= <?php echo $val1 ?> required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="time" class="col-md-2 control-label">TimeOut</label>
                    <div class="col-md-8">
                        <?php if(isset($_GET['edit1'])) 
                       $val1= $timeout; 
                       else $val1=""; ?>
                     
                        <input type="time" name="timeout" class="form-control" placeholder="" value= <?php echo $val1 ?> required>
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

<?php 
if(isset($_POST['Post1'])){
  $Schedule = new Schedule();

  $Schedule->setID(Util::getGUID());
  $Schedule->setTrainID($_SESSION["Id"]);
  $Schedule->setTrainName($name);
  $Schedule->setRouteID($_POST["routeid"]);
  $Schedule->setStation($_POST["stationid"]);
  //$Schedule->setDate($_POST["date"]);
  $Schedule->setTimeIn($_POST["timein"]);
  $Schedule->setTimeOut($_POST["timeout"]);

  $NewID=$Schedule->getID();
  $Id = $Schedule->getTrainID();
  $Name = $Schedule->getTrainName();
  $RouteID = $Schedule->getRouteID();
  $RouteType = $_POST['routetype'];
  $Station = $Schedule->getStation();
  $Date = $Schedule->getDate();
  $TimeIn = $Schedule->getTimeIn();
  $TimeOut = $Schedule->getTimeOut();
   
   







 $conn1=opencon(); 




$sql = "INSERT into schedule(id,trainid,trainname,routeid,routetype,stationid,timein,timeout) VALUES ('$NewID','$Id','$Name','$RouteID','$RouteType','$Station','$TimeIn','$TimeOut')";

$query=mysqli_query($conn1,$sql);
  
  }




   if(isset($_POST['Update'])){
  $Schedule = new Schedule();
  $Schedule->setID($_GET['edit1']);
 
 
  
  $Schedule->setTrainID($_SESSION["Id"]);
  $Schedule->setRouteID($_POST["routeid"]);
  $Schedule->setStation($_POST["stationid"]);
  //$Schedule->setDate($_POST["date"]);
  $Schedule->setTimeIn($_POST["timein"]);
  $Schedule->setTimeOut($_POST["timeout"]);

  $NewID=$Schedule->getID();
  $Id = $Schedule->getTrainID();
  
  $RouteID = $Schedule->getRouteID();
  $Station = $Schedule->getStation();
  $Date = $Schedule->getDate();
  $TimeIn = $Schedule->getTimeIn();
  $TimeOut = $Schedule->getTimeOut();
  $RouteType=$_POST["routetype"];
 



   $conn1=opencon();
   $SQL1 = "UPDATE schedule SET routeid='".$RouteID."',stationid='".$Station."',routetype='".$RouteType."',timein='".$TimeIn."',timeout='".$TimeOut."'
				WHERE id='".$NewID."'";
				$rq=mysqli_query($conn1,$SQL1);
$test="eachschedule.php?id=  $Id ";
     header("Location:$test");




}





  $conn1=opencon();

$sql1="SELECT * FROM schedule where trainid='".$_SESSION["Id"]."'";
$r=mysqli_query($conn1,$sql1);
 ?>
 </div>

    <div class="panel-body">

            <table style="color:white;background-color: gray;" class="table table-bordered">
                <tr>
                    
                    <th> TrainNo</th>
                    <th> TrainName</th>
                    <th> Route ID</th>
                    <th> Route Name</th>
                    <th> Route Type</th>
                    <th> StationId</th>
                    <th> StationName</th>
                   
                    <th> TimeIn</th>
                    <th> TimeOut</th>
                    <th> Edit</th>
                    <th> Delete</th>
                  
                    
                </tr>
               

<?php
while($rows=mysqli_fetch_array($r))
{



$newid=$rows['id'];
$id=$rows['trainid'];
$name=$rows['trainname'];
$station=$rows['stationid'];
$routeid=$rows['routeid'];
$RouteType=$rows['routetype'];
//$date=$rows['date'];
$timein=$rows['timein'];
$timeout=$rows['timeout'];




$conn1=opencon();

$sql2="SELECT * FROM route  WHERE routeid='".$routeid."'";
$r1=mysqli_query($conn1,$sql2);


while($rows=mysqli_fetch_array($r1))
{





$routename=$rows['routename'];




}
$conn1=opencon();

$sql21="SELECT * FROM station  WHERE stationid='".$station."'";
$r21=mysqli_query($conn1,$sql21);


while($rows=mysqli_fetch_array($r21))
{





$stationname=$rows['stationname'];




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
                            <td><?php echo $RouteType;?>
                            </td>
                            <td><?php echo $station;?>
                            </td>
                            <td><?php echo $stationname;?>
                            </td>
                           
                            <td><?php echo $timein;?>
                            </td>
                             <td>
                            <?php echo $timeout;?>
                            </td>
                            <td><a href="?edit1=<?php echo $newid; ?> & id= <?php echo $_SESSION['Id'];?>" onclick="return confirm('Are You Sure to edit !'); " >Edit</a></td>
                        <td><a href="?del=<?php echo $id; ?>" onclick="return confirm('Are You Sure to delete !'); " >Delete</a></td>
                        

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

 

