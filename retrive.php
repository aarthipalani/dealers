<html>
<head>
<style>
table{
	border: 1px solid #000;

width:100%;
color:black;
font-family: monospace;
font-size: 25px;
text-align: center;
}
th{
background-color: bisque;

}
tr:nth-child(even){
background-color: aqua;
}
</style>
</head>
<body>
<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysqli_connect('localhost', 'root', '', 'data');





$sql = "SELECT id, name, email, company_name, city, about_here, mobile, pin_code FROM formtab WHERE interest='DP'";
if ($res = mysqli_query($conn, $sql)) {
if (mysqli_num_rows($res) > 0) {
echo "<table>";
echo "<tr>";
echo "<th>id</th>";
echo "<th>name</th>";
echo "<th>email</th>";
echo "<th>company_name</th>";
echo "<th>city</th>";
echo "<th>about_here</th>";
echo "<th>mobile</th>";
echo "<th>pin_code</th>";
echo "</tr>";
while ($row = mysqli_fetch_array($res)) {
echo "<tr>";
echo "<td>".$row['id']."</td>";
echo "<td>".$row['name']."</td>";
echo "<td>".$row['email']."</td>";
echo "<td>".$row['company_name']."</td>";
echo "<td>".$row['city']."</td>";
echo "<td>".$row['about_here']."</td>";
echo "<td>".$row['mobile']."</td>";
echo "<td>".$row['pin_code']."</td>";
echo "</tr>";
}
}
else {
echo "No matching records are found.";
}
}
else {
echo "ERROR: Could not able to execute $sql. "
					.mysqli_error($link);
}



?>
	</body>
</html>
