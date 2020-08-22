
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
    <body style="background-image: url('./assets/img/header-bg.jpg');background-size: 150%" id="page-top">
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

<div  class="panel col-md-10 col-md-offset-1" style="font-size: 16px;color:white;   margin-top: 100px">
    <div style="margin-left: 120px;color:white;" class="panel-heading" align="left">
        <h1><u>Book Ticket</u></h1>
    </div>

        <?php if(!isset($_GET['edit'])){ ?>

<div style="height: 300px;width: 600px;margin-top: 50px;" class="panel-body" align="center">
        
            <form  style="background-color: black; height: 560px;"class="form-horizontal" method="post" name="form">
						<div  class="form-group">

							 <label for="routeid" class="col-md-2 control-label">Route</label>

							<div class="col-md-8">
								
									    <?php
									    

									    $var = '<select name="routeid" class="form-control"  id="select-from-type">';
										

											//if DAO access is successful to load all the Roles then show them one by one
  $conn1=opencon();
										$sql18="SELECT * FROM route";
       $r18=mysqli_query($conn1,$sql18);

										

										
									       while($rows=mysqli_fetch_array($r18))
{
									    
									    		$var = $var. '<option value="'.$rows['routeid'].'"';   			

									          	$var = $var.'>'.$rows['routename'].'</option>';
								
											}

											$var = $var.'</select>';
										
										echo $var;
										?>	
							</div>
						</div>
					<?php }


					
?>
     <?php if(!isset($_GET['edit'])){ ?>

<div class="panel-body" align="center">
        
            <form class="form-horizontal" method="post" name="form">
						<div class="form-group"> 

							 <label for="date" class="col-md-2 control-label">From:</label>

							<div class="col-md-8">	
								
									    <?php
									    
              				    $var1 = '<select name="src" class="form-control"  id="select-from-type">';
										

											//if DAO access is successful to load all the Roles then show them one by one

  
         $conn1=opencon();

										$sql19="SELECT * FROM routestation  ";
       $r19=mysqli_query($conn1,$sql19);

										

										
									       while($rows=mysqli_fetch_array($r19))
{
									    
									    		$var1 = $var1. '<option value="'.$rows['stationid'].'"';   			

									          	$var1 = $var1.'>'.$rows['stationname'].'</option>';
								
											}

											$var1 = $var1.'</select>';
										
										echo $var1;
										?>	
							</div>
						</div>
					<?php 
				}?>

        <?php if(!isset($_GET['edit'])){ ?>

<div class="panel-body" align="center">
        
            <form class="form-horizontal" method="post" name="form">
						<div class="form-group">

							 <label for="date" class="col-md-2 control-label">To:</label>

							<div class="col-md-8">	
								
									    <?php
									    
              				    $var1 = '<select name="dst" class="form-control"  id="select-from-type">';
										

											//if DAO access is successful to load all the Roles then show them one by one

  
         $conn1=opencon();

										$sql19="SELECT * FROM routestation  ";
       $r19=mysqli_query($conn1,$sql19);

										

										
									       while($rows=mysqli_fetch_array($r19))
{
									    
									    		$var1 = $var1. '<option value="'.$rows['stationid'].'"';   			

									          	$var1 = $var1.'>'.$rows['stationname'].'</option>';
								
											}

											$var1 = $var1.'</select>';
										
										echo $var1;
										?>	
											<?php 
				}?>

							</div>
						</div>
				



				 <?php if(!isset($_GET['edit'])){ ?>

<div class="panel-body" align="center">
        
            <form class="form-horizontal" method="post" name="form">
						<div class="form-group">

							 <label for="date" class="col-md-2 control-label">SeatType:</label>

							<div class="col-md-8">	
								
									    <?php
									    
              				    $var1 = '<select name="seattype" class="form-control"  id="select-from-type">';
										

											//if DAO access is successful to load all the Roles then show them one by one

  
         $conn1=opencon();

										$sql19="SELECT * FROM seattype  ";
       $r19=mysqli_query($conn1,$sql19);

										

										
									       while($rows=mysqli_fetch_array($r19))
{
									    
									    		$var1 = $var1. '<option value="'.$rows['seattypename'].'"';   			

									          	$var1 = $var1.'>'.$rows['seattypename'].'</option>';
								
											}

											$var1 = $var1.'</select>';
										
										echo $var1;
										?>	
											<?php 
				}?>

							</div>
						</div>
                 <?php if(!isset($_GET['edit'])){ ?>

<div class="panel-body" align="center">
        
            <form class="form-horizontal" method="post" name="form">
						<div class="form-group"> 

							 <label for="date" class="col-md-2 control-label">Ticket(s):</label>

							<div class="col-md-8">	
								
									    <?php
									    
              				    $var1 = '<select name="noofticket" class="form-control"  id="select-from-type">';
										

				

										$i=1;

										
									       while($i<=4)
{
									    
									    		$var1 = $var1. '<option value="'.$i.'"';   			

									          	$var1 = $var1.'>'.$i.'</option>';
									          	$i++;
								
											}

											$var1 = $var1.'</select>';
										
										echo $var1;
										?>	
							</div>
						</div>
					<?php 
				}?>





            





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


                 <div class="form-group">
                  <div class="">
                            <?php
                            if(isset($_GET['edit']))
                            {
                                ?>
                                <button type="submit" name="Update" class="btn btn-primary">Update</button>
                                <?php
                            }
                            else
                            {
                                ?>
                                <button type="submit" name="Post" class="btn btn-primary">Search</button>
                                <?php
                            }
                            ?>
                   
                    </div>
                </div>
            </form>
        </div>



<?php 
if(isset($_POST['Post'])){
  

  
  
   $Id = $_POST['routeid'];
   $Source = $_POST['src'];
   $Dest = $_POST['dst'];
   $SeatType = $_POST['seattype'];
   $Tickets = $_POST['noofticket'];
   $Date = $_POST['date'];
   $SourceVal=0;
   $DestVal=0;
 $conn1=opencon(); 
$sql1234567 = "SELECT * FROM routestation WHERE routeid = '".$Id."'  and stationid = '".$Source."'";


$r1234567=mysqli_query($conn1,$sql1234567);
while($rowsss=mysqli_fetch_array($r1234567)  )
{
 $SourceVal = $rowsss['stationpos'];
 $SourceName = $rowsss['stationname'];

}

 $conn1=opencon(); 
$sql12345678 = "SELECT * FROM routestation WHERE routeid = '".$Id."'  and stationid = '".$Dest."'";


$r12345678=mysqli_query($conn1,$sql12345678);
while($rowsss=mysqli_fetch_array($r12345678)  )
{
 $DestVal = $rowsss['stationpos'];
 $DestName = $rowsss['stationname'];
}

//echo $SourceVal;
//echo $DestVal;

if($SourceVal==0 || $DestVal==0)
{
	echo "Not Possible";
}
   if($Source==$Dest)
   {
   	echo "Not Possible";


   }

   else
   {

?>

 
                <?php
   if($SourceVal < $DestVal ) 
   {
   	$RouteType=1;
   }

   else if ($SourceVal > $DestVal )
   {
   	$RouteType=2;
   }
 $conn1=opencon(); 




$sql123 = "SELECT * FROM train WHERE routeid = '".$Id."' ";

$r123=mysqli_query($conn1,$sql123);


while($rows=mysqli_fetch_array($r123) )
{
?>

	
<?php
$TrainID = $rows['trainid'];

$Date1 =strtotime("1 day",strtotime($Date));

$Date1 = date("Y-m-d",$Date1);
if($RouteType==1)
{
	
	 $sql12345 = "SELECT * FROM schedulebydate WHERE trainid = '".$TrainID."'  and routeid = '".$Id."'and routetype % 2 !=0 AND stationid = '".$Source."' and date = '".$Date."' ";


$r12345=mysqli_query($conn1,$sql12345);
while($rowssss=mysqli_fetch_array($r12345)  )
{
 $Leave = $rowssss['timeout'];
 $LeaveDate = $rowssss['timeoutdate'];
 break;
}




$sql12345new = "SELECT * FROM schedulebydate WHERE trainid = '".$TrainID."'  and routeid = '".$Id."'and routetype % 2 !=0 AND stationid = '".$Dest."' AND (( date = '".$Date."' ) or( date = '".$Date1."'))  ";


$r12345new=mysqli_query($conn1,$sql12345new);
while($rowssssnew=mysqli_fetch_array($r12345new)  )
{
if($Leave > $rowssssnew['timein'] )
 
 {$Reach = $rowssssnew['timein'];
 $ReachDate=$Date1;
 break;
}
else
{
	$Reach = $rowssssnew['timein'];
 $ReachDate=$rowssssnew['timeindate'];

 break;
}

}





}
 else
{


  $sql12345 = "SELECT * FROM schedulebydate WHERE trainid = '".$TrainID."'  and routeid = '".$Id."'and routetype % 2 = 0 AND stationid = '".$Source."' and date = '".$Date."' ";


$r12345=mysqli_query($conn1,$sql12345);
while($rowssss=mysqli_fetch_array($r12345)  )
{
 $Leave = $rowssss['timeout'];
 $LeaveDate = $rowssss['timeoutdate'];
 break;
}

$sql12345new = "SELECT * FROM schedulebydate WHERE trainid = '".$TrainID."'  and routeid = '".$Id."'and routetype % 2 =0 AND stationid = '".$Dest."' AND (( date = '".$Date."' ) or( date = '".$Date1."'))  ";


$r12345new=mysqli_query($conn1,$sql12345new);
while($rowssssnew=mysqli_fetch_array($r12345new)  )
{
 if($Leave > $rowssssnew['timein'] )
 
 {$Reach = $rowssssnew['timein'];
 $ReachDate=$Date1;
 break;

}
else
{
	$Reach = $rowssssnew['timein'];
 $ReachDate=$rowssssnew['timeindate'];
 break;

 
}
}

}




/*echo $Leave;
echo $Reach;
echo $LeaveDate;
echo $ReachDate;
*/
   $sql1234 = "SELECT * FROM createticket WHERE trainno = '".$TrainID."' and tickettype = '".$SeatType."' AND date = '".$Date."' AND booking='NA' ";

$r1234=mysqli_query($conn1,$sql1234);

$d=0;

if(mysqli_num_rows($r1234)!=0)
{ ?>
	<div class="panel-body">
    
            <table style="background-color: gray;color:white;" class="table table-bordered">
                <tr>
                    
                    <th>   TrainNo</th>
                    <th>   BogieNo</th>
                    <th>Ticket no </th>
                     <th>Seat Type </th>
                     <th>routetype</th>
                     <th>From</th>
                     <th>To </th>
                    <th>Leave Date </th>
                    <th>Leave Time </th>
                    <th>Reach Date </th>
                    <th>Reach Time </th>
                    <th>Booking </th>
                    
                  
                    
                </tr>
                <div style="margin-top: 10px;"class="panel-body">
<a  href="hellonew.php?id= <?php echo $sql1234; ?> && id1=<?php echo $Tickets; ?>" onclick="return ; "><h1> Book</h1></a>
</div>
                
<?php 
}
while($rowss=mysqli_fetch_array($r1234)  )
{
 
 if($d>=$Tickets)
 	{break;}


  $TrNo = $rowss['trainno'];
  $TicketNo = $rowss['ticketid'];
  $BogieNo=$rowss['bogieno'];
  $Type=$rowss['tickettype'];
  $date1=$rowss['date'];
  $book=$rowss['booking'];
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
                            <?php echo $Type;?>
                            </td>
                            <td>
                            <?php echo $routetype;?>
                            </td>
                            <td>
                            <?php echo $SourceName;?>
                            </td>
                            <td>
                            <?php echo $DestName;?>
                            </td>
                            <td>
                            <?php echo $LeaveDate;?>
                            </td>
                            <td>
                            <?php echo $Leave;?>
                            </td>
                            <td>
                            <?php echo $ReachDate;?>
                            </td>
                            <td>
                            <?php echo $Reach;?>
                            </td>
                             <td>
                            <?php echo $book;?>
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


  
  }
}
}

        ?>
        <?php
