<?php

$server="localhost";
$username="root";
$password="";

$database="duafekuo";

$connect=mysqli_connect($server,$username,$password,$database);

if(!$connect){
    die("CONNECTION FAILED:".mysqli_connect_error());
    exit();
}