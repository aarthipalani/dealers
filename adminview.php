<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<style>
body
{
width: -webkit-fill-available;
background-color: #f5f5f5;
height: -webkit-fill-available;}
table
{
text-align: center;

border-collapse: collapse;
color:black;
}
table, th, td {
border: 1px solid black;
padding: 3px;
}
h2
{
text-align: center;
font-size: 40px;
}
h3
{
text-align: center;
font-size: 30px;
color: darkblue;
}
th{
background-color: darkgray;
font-size: 22px;
}
td
{
font-size: 15px;
background-color: white;
}
</style>
</head>
<body>
<div class="container">
<h2>Dealer / Suppliers Registration Details</h2>
<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysqli_connect('localhost', 'root', '', 'data');

if(! $conn ) {
die('Could not connect: ' . mysql_error());
}


if(isset($_POST['submit']))
{
$interest=$_POST['interest'];
}
echo "<h3>$interest Members List</h3>";

$sql = "SELECT name, company_name, email, mobile, door_no, street, area, city, state, pin_code, about_here, question FROM formtab WHERE interest='$interest'";
if ($res = mysqli_query($conn, $sql)) {
if (mysqli_num_rows($res) > 0) {
echo "<table>";
echo "<tr>";
echo "<th>Name</th>";
echo "<th>Company_name</th>";
echo "<th>Email</th>";
echo "<th>Mobile</th>";
echo "<th>Door_no</th>";
echo "<th>Street</th>";
echo "<th>Area</th>";
echo "<th>City</th>";
echo "<th>State</th>";
echo "<th>Pin_code</th>";
echo "<th>About_here</th>";
echo "<th>Question</th>";
echo "</tr>";
while ($row = mysqli_fetch_array($res)) {
echo "<tr>";
echo "<td>".$row['name']."</td>";
echo "<td>".$row['company_name']."</td>";
echo "<td>".$row['email']."</td>";
echo "<td>".$row['mobile']."</td>";
echo "<td>".$row['door_no']."</td>";
echo "<td>".$row['street']."</td>";
echo "<td>".$row['area']."</td>";
echo "<td>".$row['city']."</td>";
echo "<td>".$row['state']."</td>";
echo "<td>".$row['pin_code']."</td>";
echo "<td>".$row['about_here']."</td>";
echo "<td>".$row['question']."</td>";
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

</div>

</body>
</html>
