<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', '');
$connection = mysql_connect('localhost', 'root', '') or die(mysql_error());
$database = mysql_select_db('data') or die(mysql_error());

if(isset($_POST['submit']))
{
$name=$_POST['name'];



$query=mysql_query("INSERT INTO sasa (name) VALUES ('$name')");

mysql_query($connection, $query);
}

?>
