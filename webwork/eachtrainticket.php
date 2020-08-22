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








<?php


include_once 'common/class.common.php';

include_once "db_connnection.php";
$_SESSION["Id"]= $_GET['id'];

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
        <h1><u>Ticket</u></h1>
    </div>















<a href="searchticket.php?id= <?php echo $_SESSION["Id"];?>" onclick="return ; ">Search Ticket</a>


<?php


$conn1=opencon();

$sql12="SELECT * FROM createticket WHERE trainno 
='".$_SESSION["Id"]."'";
$r12=mysqli_query($conn1,$sql12);
 ?>
 </div>

    <div class="panel-body">

            <table style="color: white;background-color: gray;" class="table table-bordered">
                <tr>
                    <th>TicketNo</th>
                    <th>TrainNo</th>
                    <th>RouteType</th>
                    <th>Type</th>
                    <th>Date</th>
                    <th>Booking</th>
                    <th>Bogie No</th>
                    <th>Passenger Name </th>
                    <th>Mobile</th>
                    <th> </th>
                    <th> </th>
                  
                    
                </tr>
               

<?php
while($rows=mysqli_fetch_array($r12))
{




$id=$rows['ticketid'];
$name=$rows['trainno'];
$routetype=$rows['routetype'];
$type=$rows['tickettype'];
$date=$rows['date'];
$book=$rows['booking'];
$bogieno=$rows['bogieno'];
$passengername=$rows['passengername'];
$mobile=$rows['phoneno'];



 
  ?>


<tr>
                            
                            
                            <td><?php echo $id;?>
                            </td>
                             <td>
                            <?php echo $name;?>
                            </td>
                             <td>
                            <?php echo $routetype;?>
                            </td>
                             <td>
                            <?php echo $type;?>
                            </td>
                             <td>
                            <?php echo $date;?>
                            </td>
 <td>
                            <?php echo $book;?>
                            </td>


                            <td>
                            <?php echo $bogieno;?>
                            </td>
                             <td>
                            <?php echo $passengername;?>
                            </td>
                             <td>
                            <?php echo $mobile;?>
                            </td>

                           
                            <td><a href="?edit=<?php echo $id; ?>" onclick="return confirm('Are You Sure to edit !'); " >Edit</a></td>
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
  echo "You must login first";
}
?>
