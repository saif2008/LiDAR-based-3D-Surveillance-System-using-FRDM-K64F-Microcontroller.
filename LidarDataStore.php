<?php
$now = new DateTime("now",new DateTimeZone('America/Indiana/Indianapolis'));

//$field = $_GET['field'];
$Xvalue = $_GET['Xvalue'];
$Yvalue = $_GET['Yvalue'];
$Zvalue = $_GET['Zvalue'];
$LidarValue = $_GET['LidarValue'];

$mysqli = new mysqli("rdc04.uits.iu.edu:3245", "MEuser", "123456abcd", "ME");//connect to MYSQL database sever
//Check if connection was successfull
if (mysqli_connect_errno()) 
{
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
} 
$datenow = $now->format("Y-m-d H:i:s");
//$hvalue = $value;

$sql2 = "INSERT INTO `ADXL_Data`(`TimeLog`, `X_Read`, `Y_Read`, `Z_Read`,`LidarData`) VALUES (\"$datenow\",\"$Xvalue\",\"$Yvalue\",\"$Zvalue\",\"$LidarValue\")";
$result2 = $mysqli->query($sql2);

$sql="SELECT value from Testing where ID=1";  //MYSQL query language
$result= $mysqli->query($sql); //using PHP libary to send this query to MYSQL database

while($rs1 = $result->fetch_assoc()) //Read the data one by one if your query get multiple value
{
    echo $rs1['value']."<br>"; // print each data line by line
}
//echo " Hello, World!";
?>