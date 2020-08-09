<?php
session_start();

$host="localhost";
$username="root";
$pass="";
$db="mahallahregistration";

$conn=mysqli_connect($host,$username,$pass,$db);
if(!$conn){
	die("Database connection error");
}

$user_id=$_GET['id'];

	$query="delete from `student` where `student_id`='$user_id'";

	$res=mysqli_query($conn,$query);
	if($res){
		$_SESSION['success']="Data Deleted successfully!";
		header('Location:conference.php');
	}else{
		echo "Not Deleted , please try again!";
	}




?>
