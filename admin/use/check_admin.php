<?php 

session_start();
if(!isset($_SESSION['ma_admin'])){
	header('location:../index.php');
	exit();
}