<?php


$con = mysqli_connect('127.0.0.1','root','');

if(!$con)
{
echo "not connection";
}

if(!mysqli_select_db($con,'form1'))

{
echo "does not exist";
}


$name = $_POST['user'];
$email = $_POST['eemail'];
$roll = $_POST['num'];
$date = $_POST['dat'];
$password = $_POST['pass'];
$message = $_POST['mess'];

$sql = "INSERT INTO person1 (name,email,roll,date,password,message) VALUES ('$name','$email','$roll','$date','$password','$message')";

if(!mysqli_query($con,$sql))
{
echo " not connected ";
}
else
{
echo "inserted your data";
}

header("refresh:2; url=index.html");


?>