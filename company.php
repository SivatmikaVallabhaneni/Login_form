<?php
$server='localhost';
$user='root';
$pwd='';
$database='Company';

$con=mysqli_connect($server,$user,$pwd,$database);

if(!$con){
    die("error deleting record".mysqli_error($con));
}

echo "connected";
?>
