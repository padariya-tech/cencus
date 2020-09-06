<?php


$con = mysqli_connect('127.0.0.1','root','');

if(!$con)
{
echo "not connection";
}

if(!mysqli_select_db($con,'house'))

{
echo "does not exist";
}


$access_latrine = $_POST['le'];
$bathing_facility = $_POST['ba'];
$kitchen = $_POST['kit'];
$cook_fuel = $_POST['main'];
$cerel = $_POST['cere'];
$radio = $_POST['rad'];
$television = $_POST['tele'];
$vehicle = $_POST['bic'];
$car = $_POST['car'];
$internet = $_POST['int'];
$suggession = $_POST['sug'];


$sql = "INSERT INTO form (access_latrine,bathing_facility,kitchen,cook_fuel,cerel,radio,television,vehicle,car,internet,suggession) VALUES ('$access_latrine','$bathing_facility','$kitchen','$cook_fuel','$cerel','$radio','$television','$vehicle','$car','$internet','$suggession')";

if(!mysqli_query($con,$sql))
{
echo " not connected ";
}
else
{
echo "<h1>inserted your data</h1>";
}





?>