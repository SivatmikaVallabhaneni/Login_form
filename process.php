<?php

include 'company.php';

if(isset($_POST['submit'])){
    $ssn=$_POST['ssn'];
    $ename=$_POST['ename'];
    $salary=$_POST['salary'];
    $address=$_POST['address'];

    $sql ="insert into Employee(ssn,ename,salary,address) values('$ssn','$ename','$salary','$address'
    )";

    if(mysqli_query($con,$sql)){
        echo "<script>alert('Made for each other....')</script>";
        echo "<script>window.open('insert.php','_self')</script>";
    }

    else{
        echo "error:".mysqli_error($con);
    }
mysqli_close($con);
}

?>