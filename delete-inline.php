<?php
include 'conn.php';
$id = $_GET['id'];
$sql = "DELETE FROM student WHERE s_id = {$id}";
$result=mysqli_query($conn,$sql);

if($result)
{
    header("Location: http://localhost/codereach-5-CRUD/index.php");
}
else
{
    echo 'record cant be delete';
}

?>