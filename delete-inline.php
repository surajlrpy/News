<?php
 $stu_id=$_GET['id'];

$conn = mysqli_connect("localhost","root","","curd")or die("Connection failed");
     
$sql = " DELETE FROM student WHERE sid={$stu_id}";
   
$result = mysqli_query($conn,$sql) or die("data unsuccessful.");


header("Location: http://localhost/curd/index.php");

mysqli_close($conn);
   
?>