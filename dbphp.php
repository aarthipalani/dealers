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
$name=$_POST['name'];
$company_name=$_POST['company_name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$door_no=$_POST['door_no'];
$street=$_POST['street'];
$area=$_POST['area'];
$city=$_POST['city'];
$state=$_POST['state'];
$pin_code=$_POST['pin_code'];
$about_here=$_POST['about_here'];
$question=$_POST['question'];
$interest=$_POST['interest'];





$sql = "INSERT INTO formtab (name, company_name, email, mobile, door_no, street, area, city, state, pin_code, about_here, question, interest)
        VALUES ('".$_POST["name"]."', '".$_POST["company_name"]."', '".$_POST["email"]."', '".$_POST["mobile"]."', '".$_POST["door_no"]."', '".$_POST["street"]."', '".$_POST["area"]."', '".$_POST["city"]."', '".$_POST["state"]."', '".$_POST["pin_code"]."', '".$_POST["about_here"]."', '".$_POST["question"]."', '".$_POST["interest"]."')";


   $retval = mysqli_query( $conn, $sql );

   if(! $retval ) {
      die('Could not enter data: ' . mysqli_error());
   }

   echo "Entered data successfully\n";


}
?>
