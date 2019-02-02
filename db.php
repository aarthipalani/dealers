<?php



$connect = mysqli_connect('localhost', 'root', '', 'cart');


$query="INSERT INTO post (name, gender, designation) VALUES ('$name', '$gender', '$designation')";
mysqli_query($connect, $query);



$sql = "SELECT * FROM post";
$result = mysqli_query($connect, $sql);
?>
