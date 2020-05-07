<?php 

$server = "localhost";
$user = "root";
$password = "";
$database = "do_an";

$connect = mysqli_connect($server,$user,$password,$database);
mysqli_set_charset($connect,'utf8');