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

// insert query for register page
if(isset($_REQUEST['st_email']))
{
    $user_id=$_POST['student_id'];
	$name=$_POST['st_username'];
	$email=$_POST['st_email'];
    $fname=$_POST['st_fname'];
    $lname=$_POST['st_lname'];
	$status=$_POST['st_status'];
	$phone=$_POST['st_phone'];
    
	if($_POST['student_id']==''){
		
	$query="UPDATE `student` SET `st_username`='$name',`st_email`='$email',`st_fname`='$fname',`st_lname`='$lname',`st_status`='$status',`st_phone`='$phone' where `student_id`='$user_id'";	
	}else{
	 $query="UPDATE `student` SET `st_username`='$name',`st_email`='$email',`st_fname`='$fname',`st_lname`='$lname',`st_status`='$status',`st_phone`='$phone' where `student_id`='$user_id'";
	}
	
	$res=mysqli_query($conn,$query);
	if($res){
		$_SESSION['success']="Data Updated successfully!";
		header('Location:view.php');
	}else{
		$_SESSION['success']="Data Not Updated successfully!";
        header ('Location:view.php');
	}
	
}



?>