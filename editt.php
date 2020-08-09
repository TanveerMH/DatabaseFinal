<?php
include_once 'auth.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE student set student_id='" . $_POST['userid'] . "',st_username='" . $_POST['name'] . "', st_fname='" . $_POST['first_name'] . "', st_lname='" . $_POST['last_name'] . "',st_phone='" . $_POST['phone'] . "' , st_status='" . $_POST['status'] . "' ,st_email='" . $_POST['email'] . "' WHERE student_id='" . $_POST['userid'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM student WHERE student_id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Employee Data</title>
<style media="screen">
@import url(https://fonts.googleapis.com/css?family=Roboto:400,300,600,400italic);
* {
margin: 0;
padding: 0;
box-sizing: border-box;
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
-webkit-font-smoothing: antialiased;
-moz-font-smoothing: antialiased;
-o-font-smoothing: antialiased;
font-smoothing: antialiased;
text-rendering: optimizeLegibility;
}

body {
font-family: "Roboto", Helvetica, Arial, sans-serif;
font-weight: 100;
font-size: 12px;
line-height: 30px;
color: #777;
background: #4CAF50;
}

.container {
max-width: 400px;
width: 100%;
margin: 0 auto;
position: relative;
}

#contact input[type="text"],
#contact input[type="email"],
#contact input[type="tel"],
#contact input[type="url"],
#contact textarea,
#contact button[type="submit"] {
font: 400 12px/16px "Roboto", Helvetica, Arial, sans-serif;
}

#contact {
background: #F9F9F9;
padding: 25px;
margin: 150px 0;
box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}

#contact h3 {
display: block;
font-size: 30px;
font-weight: 300;
margin-bottom: 10px;
}

#contact h4 {
margin: 5px 0 15px;
display: block;
font-size: 13px;
font-weight: 400;
}

fieldset {
border: medium none !important;
margin: 0 0 10px;
min-width: 100%;
padding: 0;
width: 100%;
}

#contact input[type="text"],
#contact input[type="email"],
#contact input[type="tel"],
#contact input[type="url"],
#contact textarea {
width: 100%;
border: 1px solid #ccc;
background: #FFF;
margin: 0 0 5px;
padding: 10px;
}

#contact input[type="text"]:hover,
#contact input[type="email"]:hover,
#contact input[type="tel"]:hover,
#contact input[type="url"]:hover,
#contact textarea:hover {
-webkit-transition: border-color 0.3s ease-in-out;
-moz-transition: border-color 0.3s ease-in-out;
transition: border-color 0.3s ease-in-out;
border: 1px solid #aaa;
}

#contact textarea {
height: 100px;
max-width: 100%;
resize: none;
}

#contact button[type="submit"] {
cursor: pointer;
width: 100%;
border: none;
background: #4CAF50;
color: #FFF;
margin: 0 0 5px;
padding: 10px;
font-size: 15px;
}

#contact button[type="submit"]:hover {
background: #43A047;
-webkit-transition: background 0.3s ease-in-out;
-moz-transition: background 0.3s ease-in-out;
transition: background-color 0.3s ease-in-out;
}

#contact button[type="submit"]:active {
box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.5);
}

.copyright {
text-align: center;
}

#contact input:focus,
#contact textarea:focus {
outline: 0;
border: 1px solid #aaa;
}

::-webkit-input-placeholder {
color: #888;
}

:-moz-placeholder {
color: #888;
}

::-moz-placeholder {
color: #888;
}

:-ms-input-placeholder {
color: #888;
}
</style>
</head>
<body>





<div class="container">
  <form id="contact" action="" method="post">
    <h3>Mahallah Management System</h3>
        <h4>Update Form</h4>
        <div><?php if(isset($message)) { echo $message; } ?>
    <div style="padding:10px;">
      <button type="button" name="button"><a href="conference.php">Student List</a></button>

    </div>
    <fieldset>
      <input type="hidden" name="userid" class="txtField" value="<?php echo $row['student_id']; ?>">
      <input placeholder="Student ID" type="text" name="userid"  value="<?php echo $row['student_id']; ?>">
    </fieldset>
    <fieldset>
    <input placeholder="Username"type="text" name="name" class="txtField" value="<?php echo $row['st_username']; ?>">
    </fieldset>
    <fieldset>
  <input placeholder="First Name" type="text" name="first_name" class="txtField" value="<?php echo $row['st_fname']; ?>">
    </fieldset>
    <fieldset>
    <input placeholder="Last Name" type="text" name="last_name" class="txtField" value="<?php echo $row['st_lname']; ?>">
    </fieldset>
    <fieldset>
    <input placeholder="Phone" type="text" name="phone" class="txtField" value="<?php echo $row['st_phone']; ?>">
    </fieldset>
    <fieldset>
    <input  placeholder="Status" type="text" name="status" class="txtField" value="<?php echo $row['st_status']; ?>">
    </fieldset>
    <fieldset>
    <input  placeholder="Email" type="text" name="email" class="txtField" value="<?php echo $row['st_email']; ?>">
    </fieldset>
    <fieldset>

<button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>

  </form>
</div>





</body>
</html>
