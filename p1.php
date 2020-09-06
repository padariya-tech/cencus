<?php


$con = mysqli_connect('127.0.0.1','root','');

if(!$con)
{
echo "not connection";
}

if(!mysqli_select_db($con,'personal'))

{
echo "does not exist";
}


$firstname = $_POST['fn'];
$middlename = $_POST['mn'];
$lastname = $_POST['ln'];
$gender = $_POST['gend'];
$cast = $_POST['cas'];
$email = $_POST['ema'];
$phonenumber = $_POST['pho'];
$telephone = $_POST['tele'];
$address = $_POST['add'];
$postalcode = $_POST['post'];

$sql = "INSERT INTO form (firstname,middlename,lastname,gender,cast,email,phonenumber,telephone,address,postalcode) VALUES ('$firstname','$middlename','$lastname','$gender','$cast','$email','$phonenumber','$telephone','$address','$postalcode')";

if(!mysqli_query($con,$sql))
{
echo " not connected ";
}
else
{
echo "<h1>inserted your data</h1>";
}



header("refresh:2; url=form.html");


?>