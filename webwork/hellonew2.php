

<?php
include_once 'common/class.common.php';

include_once "db_connnection.php";
ob_start();


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


<?php
ob_start();
include_once 'common/class.common.php';

include_once "db_connnection.php";
$conn1=opencon(); 
$sql12=$_GET['sqls'];
$r2=mysqli_query($conn1,$sql12);

 ?>
 </div>

    <div style="margin-top: 150px;" class="panel-body">

            <table style="background-color: gray;color:white;" class="table table-bordered">
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
                  
                  
                    
                </tr>
               

<?php
while($rows=mysqli_fetch_array($r2))
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

                           
                         
                        

                            </tr>

                          


<?php

}

?>
<button style="background-color:yellow; height: 50px;font-size: 16px;" onClick="window.print()">Print the ticket</button>
</table>

    </div>
</div>
<html>