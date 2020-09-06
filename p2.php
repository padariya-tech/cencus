<?php


$con = mysqli_connect('127.0.0.1','root','');

if(!$con)
{
echo "not connection";
}

if(!mysqli_select_db($con,'ratidential'))

{
echo "does not exist";
}


$ownername = $_POST['ho'];
$number_of_member = $_POST['nom'];
$ownership_status = $_POST['os'];
$source_water = $_POST['ms'];
$source_light = $_POST['light'];
$waste_water = $_POST['water'];
$house_condition = $_POST['house'];


$sql = "INSERT INTO form (ownername,number_of_member,ownership_status,source_water,source_light,waste_water,house_condition) VALUES ('$ownername','$number_of_member','$ownership_status','$source_water','$source_light','$waste_water','$house_condition')";

if(!mysqli_query($con,$sql))
{
echo " not connected ";
}
else
{
echo "<h1>inserted your data</h1>";
}



header("refresh:2; url=residetial.html");


?>