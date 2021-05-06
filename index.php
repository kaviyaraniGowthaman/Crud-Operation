<!Doctype html>
<html>
<head>
<style>
    h1 { color: #FF0000; }
  </style>
<title> TOY STORE </title>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body background="images/toy.jpg">
<center>
 <h1>TOY STORE</h1>
 </center>
 <form  method="post">
 <center>
  <div>
  <input type="text" name="nme" placeholder="Name"size="50">
  </div>
  <br></br>
  <div>
  <input type="text" name="color" placeholder="Colour"size="50">
  </div>
  <br></br>
  <div>
  <input type="text" name="price"  placeholder="Price"size="50">
  </div>
  <br></br>
  <div class="w3-container">

  <div class="w3-show-inline-block">
  <div class="w3-bar">
    <button class="w3-btn w3-black"formaction="index.php" name="insert">Insert </button>
    <button class="w3-btn w3-teal"formaction="read.php"name="read">Read</button>
   
  </div>
  </div>

  <div class="w3-show-inline-block">
  <div class="w3-bar">
    <button class="w3-btn w3-teal"formaction="delete.php"name="delete">Delete</button>
  </div>
  </div>
</div>
 <br></br>
 </center>
</form>
<?php
 $con=new mysqli('localhost','root','','crud');
 if($con->connect_errno)
 {
	 echo $con->connect_error;
	 die();
 }
 if(isset($_POST['insert']))
 {
	 $name=$_POST['nme'];
	 $color=$_POST['color'];
	 $price=$_POST['price'];
	 if($name!="" && $color!="" && $price!="")
	 {
	 $sql="Insert into operation (name,colour,price)Values('$name','$color',$price)";
	 if($con->query($sql))
	 {
		echo "<center>Data Stored</center>"; 
	 }
	 else
	 {
		 echo "Insert Data Fail";
	 }
	 }
	 else
	 {
		echo "All Fields Required"; 
	 }
 }

 
?> 
</body>
</html>