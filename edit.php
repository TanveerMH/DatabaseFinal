<html>

<head>
<title>Register</title>
<link rel="stylesheet" href="../css/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
function formvalidation(){
	var name=$('#inputName').val();
	var email=$('#inputEmail').val();
	var password=$('#inputPassword').val();
	var passlength=$('#inputPassword').val().length;
	
	if(name=='')
	{
		alert("Please Enter your name");
		return false;
		
	}
	if(email=='')
	{
		alert("Please Enter your email");
		return false;
		
	}
	
}
</script>

</head>



<!------ register form start from here ---------------------->

 <body background="Images/MyBackground.png" bgcolor="#FFCC99">
	<div class="topbar"> <h1 style="color:#FFF"><center>Edit Form</center></h1></div>    
	<center>
    <div class="box">
    
 <?php
        include ("auth.php");
		$id = ''; 
         if(isset( $_GET['id'])) {
             $id = $_GET['id']; 
         }   
    
    if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

$sql = "SELECT * FROM student where student_id='$id'";
        
$result = mysqli_query($conn,$sql)or die( mysqli_error($conn));

if($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
{
    
	?>
    <table>
    <form method="post" action="update.php">
    	<tr>
        	<th>ID:</th>
        	<td><input type="text" name="id" value="<?php echo $row["student_id"]; ?>"/></td>
        </tr>
        <tr>
        	<th>Username:</th>
        	<td><input type="text" name="txtdob" value="<?php echo $row["st_username"]; ?>" /></td>
        </tr>
        <tr>
        	<th>Fist Name:</th>
        	<td><input type="text" name="txtname" value="<?php echo $row["st_fname"]; ?>" /></td>
        </tr>
        <tr>
        	<th>Last Name:</th>
        	<td>
            	<input type="text" name="txtlname" value="<?php echo $row["st_lname"]; ?>" /></td>
        
        </tr>
        
        <tr>
        	<th>Phone:</th>
        	<td><input type="text" name="phone" value="<?php echo $row["st_phone"]; ?>" /></td>
        	
        </tr>
        <tr>
        	<th>status:</th>
        	<td><input type="text" name="FID" value="<?php echo $row["st_status"]; ?>" /></td>
        </tr>            
        <tr>
        	<th>Email:</th>
            <td><input type="text" name="class" value="<?php echo $row["st_email"];?>"/></td>
        </tr>
           
        	<td colspan="2" align="center"><input type="submit" name="cmdedit" value="Save" />
            <a href="view.php"><img src="Images/back.png" height="16px" width="16px" title="Go Back"/></a>
            </td>
      
	</form></table>
   <?php
        } 
        ?>
    </div>
    </center>
    
<!------------------------register form end here----------------->

    </body>
</html>