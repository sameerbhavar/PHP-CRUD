<?php 
include 'conn.php';
$sname =$_POST['sname'];
$saddress =$_POST['saddress'];
$sclass =$_POST['class'];
$sphone =$_POST['sphone'];

 $sql = "INSERT INTO student(s_name,s_address,s_class,s_phone) VALUES ('{$sname}','{$saddress}','{$sclass}','{$sphone}')";
 $result=mysqli_query($conn,$sql) or die("Query Fail");

header("Location: http://localhost/codereach-5-CRUD/index.php");

?>