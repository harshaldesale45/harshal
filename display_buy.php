<?php
include 'connect.php';

$sql_buy="SELECT * FROM buy";

$result=mysqli_query($connect,$sql_buy);


?>
<html>
<head>
<title>photoz</title>
</head>
<body>
<table width="600" border="1">
<tr>
<th> city </th>
<th> sq </th>
<th> r </th>
<th>  d</th>
<th> bh</th>
<th> fur</th>
<th> abth</th>
<th> parking</th>
</tr>

<?php
while($row=mysqli_fetch_array($result)){
	echo "<tr>";
echo "<td>$row[city]</td>";
echo "<td>$row[squarefit]</td>";
echo "<td>$row[rent]</td>";
echo "<td>$row[deposit]</td>";
echo "<td>$row[bhk]</td>";
echo "<td>.$row[furniture].</td>";
echo "<td>$row[bathrooms]</td>";
	
	echo "</tr>";
	}

?>
</table>
</body>
</html>
