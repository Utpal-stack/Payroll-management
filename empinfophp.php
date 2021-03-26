<?php
  include('config.php');
  

   $empid=$_POST["empid"];
   $name=$_POST["name"];
   $dob=$_POST["dob"];
$gender=$_POST["gender"];
$sdate=$_POST["sdate"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$salary=$_POST["salary"];
$jobtitle=$_POST["jobtitle"];
$address=$_POST["address"];

$depid=$_POST["depid"];
$manid=$depid;
$bacc=$_POST["bacc"];
$sql="Insert into employee (Employee_id,Name,Address,Phone_no,Email,Start_date,d_birth,gender,salary,jobtitle,Depart_id,managesDepart_id,b_accno)values('$empid','$name','$address','$phone','$email','$sdate','$dob','$gender','$salary','$jobtitle','$depid','$manid','$bacc');";

if($con->query($sql)===TRUE)
{
    header('Location: employee.php');
}
else{
    echo "somthing is wrong";
}




?>