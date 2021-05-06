<?php
$con=mysqli_connect("localhost","root","","crud");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM operation");

echo "<table border='5'>
<tr>
<th>ID</th>
<th>NAME</th>
<th>COLOUR</th>
<th>PRICE</th>
<th>OPERATION</th>
</tr>";
while($row = mysqli_fetch_array($result))
{
	?>
<tr>
 <td><?php echo $row['id'];?></td>
 <td><?php echo $row['name'];?></td>
 <td><?php echo $row['colour'];?></td>
 <td><?php echo $row['price'];?></td>
 <td><a href="delete1.php?id=<?php echo $row['id'];?>">DELETE </a></td>
</tr>
<?php
}
?>
</table>

 