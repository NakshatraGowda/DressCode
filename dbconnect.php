<?php
$username = "root";
$password = "";
$server = 'localhost';
$db = 'dresscode';


$con = mysqli_connect($server,$username,$password,$db);
if($con)
{
    echo "Connection successful";
}
else
{
    echo "No connection";
}
?>