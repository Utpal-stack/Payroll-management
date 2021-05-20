<?php
  include('config.php');
       
       $sql="SELECT Employee_id,Name,Email,salary,jobtitle,Depart_id FROM `employee`;";
       $result=mysqli_query($con,$sql);
if (isset($_GET['del'])) {
	$id = $_GET['del'];
    $sqll="DELETE FROM employee WHERE Employee_id=$id;";
	$check=mysqli_query($con, $sqll);
	if($check)
    {echo"Done dana Done";}
    else{
        echo"Failed";
    }
    header('location: employee.php');
	
}
?>