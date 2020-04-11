<?php
$host = 'localhost';
$user = 'root';
$pass = 'root';
$db = 'Percentage-calculator';

$con=mysqli_connect($host,$user,$pass,$db);
    if($con){
        echo 'We have succesfully established connection to the database.';}
    
