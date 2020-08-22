<link rel="stylesheet" href=css/bootstrap.css>

<link rel="stylesheet" href=css/style.css>
<div class="panel col-md-10 col-md-offset-1" style="font-size: 16px; border-top: outset; border-left: outset;
                                border-bottom: inset; border-right: inset; margin-top: 50px">
    <div class="panel-heading" align="center">
        <h3><u>NewLogIn</u></h3>
    </div>


 <div class="panel-body" align="center">
        
            <form class="form-horizontal" method="post" name="form">
            
             <label class="" for="">ID</label>    
              
                    
                        <textarea class="form-control" name="id" style="width:25%; height: 30px; font-size: 15px"
                                  required></textarea>

                            <div class="panel-body" align="">
        
            <form class="form-horizontal" method="post" name="form">
            
             <label class="" for="">Name</label>    
              
                    
                        <textarea class="form-control" name="name" style="width:25%; height: 30px; font-size: 15px"
                                  required></textarea>
                                  </div>



<div id="form" class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" name="Post" onclick="Confirm(this.form)" class="btn btn-primary">Post</button>
                    </div>
                </div>

              </form>





<?php
include_once 'common/class.common.php';

include_once "db_connnection.php";


$Info = new Info();
if(isset($_POST['Post'])){
  $Info = new Info();
  
  $Info->setID($_POST['id']);
  $Info->setName($_POST['name']);
  
  }



    $Id = $Info->getID();
    $Name = $Info->getName();
   

 




$conn=opencon();

$sql1="SELECT * FROM tbl1 as a WHERE a.id = '$Id' ";
$r=mysqli_query($conn,$sql1);
 ?>
 </div>
    <div class="panel-body">
            <table class="table table-bordered">
                <tr>
                    
                    <th>ID</th>
                    <th>Name</th>
                  
                    
                </tr>
               

<?php
while($rows=mysqli_fetch_array($r))
{




$id=$rows['id'];
$name=$rows['name'];




header("Location:hello.php");

 
  ?>

<tr>
                            
                            
                            <td><?php echo $id;?>
                            </td>
                             <td>
                            <?php echo $name;?>
                            </td>
                        

                            </tr>

                          


<?php
}
?>

</table>
<html>

<a href="hello.php"> click here  </a>

</html>







