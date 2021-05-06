<?php
$id=$_GET['id'];
$con=mysqli_connect("localhost","root","","crud");
mysqli_query($con,"Delete  FROM operation WHERE id='$id'");
header("location:delete.php");
?>
