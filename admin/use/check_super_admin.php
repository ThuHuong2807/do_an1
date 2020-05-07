<?php 

session_start();
if(!isset($_SESSION['ma_admin']) || $_SESSION['cap_do']!=1){
	header('location:../index.php');
	exit();
}