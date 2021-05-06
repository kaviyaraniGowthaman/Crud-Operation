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
</tr>";


while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<center><td>" . $row['id'] . "</td></center>";
echo "<center><td>" . $row['name'] . "</td></center>";
echo "<center><td>" . $row['colour'] . "</td></center>";
echo "<center><td>" . $row['price'] . "</td></center>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>
 