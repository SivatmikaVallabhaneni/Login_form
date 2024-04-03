
<?php
$server=  "localhost";
$user= 'root';
$password="";
$con = new mysqli($server,$user,$password);
if($con->connect_error){
    die("Connection failed". $con->connect_error);
}

echo "Connection successful";
$con->close();
?>