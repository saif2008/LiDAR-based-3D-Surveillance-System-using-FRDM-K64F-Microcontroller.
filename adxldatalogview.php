<?php

$mysqli = new mysqli("rdc04.uits.iu.edu:3245", "MEuser", "123456abcd", "ME");//connect to MYSQL database sever
//Check if connection was successfull
if (mysqli_connect_errno()) 
{
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
} 
$sql="SELECT * from ADXL_Data";  //MYSQL query language
$result= $mysqli->query($sql); //using PHP libary to send this query to MYSQL database

while($rs1 = $result->fetch_assoc()) //Read the data one by one if your query get multiple value
{
    //echo $rs1['TimeLog']."<br>"; // print each data in seperate lines using "<br>"
	echo "TimeDate: " . $rs1["TimeLog"]. "   X_Value " . $rs1["X_Read"]. "   Y_Value " . $rs1["Y_Read"]."   Z_Value " . $rs1["Z_Read"]. "   Lidar_Value " . $rs1["LidarData"]."<br>";
}
//echo " Hello, World!";
?>