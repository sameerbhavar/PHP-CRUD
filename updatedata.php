<?php
//print_r($_POST);exit;
include 'conn.php';
$id =$_POST['sid']; 
$sname = $_POST['sname'];
$saddress=$_POST['saddress'];
$sclass = $_POST['sclass'];
$sphone = $_POST['sphone'];

$update ="UPDATE student SET s_name='{$sname}',s_address='{$saddress}',s_class='{$sclass}',s_phone='{$sphone}' WHERE s_id ={$id}";
$result=mysqli_query($conn,$update) or die("Query Fail");

header("Location: http://localhost/codereach-5-CRUD/index.php");
?>