
<!DOCTYPE HTML>


<html lang="en-US">
<head>

	<!-- This is the Head Area -->

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="phototime is a photo related website and anyone can download photos from here">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Mahallah Management System </title>
	<link rel="icon" href="pagei.jpg" type="image/x-icon" />

	<!-- Stylesheets -->
	<link rel="stylesheet" type="text/css" href="normalize.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/Animate.css" media="all" />
	<link rel="stylesheet" type="text/css" href="styleP.css" media="all" />
	<link rel="stylesheet" href="styleN.css">
	<link rel="stylesheet" type="text/css" href="footer.css" media="all" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="js.js"></script>
	<style>
			#customers {
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	border-collapse: collapse;
	width: 100%;
	}

	#customers td, #customers th {
	border: 1px solid #ddd;
	padding: 8px;
	}

	#customers tr:nth-child(even){background-color: #f2f2f2;}

	#customers tr:hover {background-color: #ddd;}

	#customers th {
	padding-top: 12px;
	padding-bottom: 12px;
	text-align: left;
	background-color: #4CAF50;
	color: white;
	}

  .myButton {
  	box-shadow: 0px 1px 0px 0px #f0f7fa;
  	background:linear-gradient(to bottom, #33bdef 5%, #019ad2 100%);
  	background-color:#33bdef;
  	border-radius:6px;
  	border:1px solid #057fd0;
  	display:inline-block;
  	cursor:pointer;
  	color:#ffffff;
  	font-family:Arial;
  	font-size:15px;
  	font-weight:bold;
  	padding:6px 24px;
  	text-decoration:none;
  	text-shadow:0px -1px 0px #5b6178;
  }
  .myButton:hover {
  	background:linear-gradient(to bottom, #019ad2 5%, #33bdef 100%);
  	background-color:#019ad2;
  }
  .myButton:active {
  	position:relative;
  	top:1px;
  }</style>
</head>
<body class="animate">

	<!-- This is the Body Area -->

	<div class="first--half" id="call-back">


		<div class="header-area" id="head">


			<div class="dropdow" >
			<a href="index.html"> <img src ="images/logo.png" id="logo" > </img></a>
			</div>



			<div class="dropdown">
				<button class="dropbtn"><a href= "index.html" >Home</a></button>
				<div class="dropdown-content">
				</div>
			</div>

			<div class="dropdown">
				<button class="dropbtn"><a href="KeyNote.html">Group Member</a> </button>
				<div class="dropdown-content">
				</div>
			</div>



			<div class="dropdown">
	          <button class="dropbtn"> <a href="conference.php"> Mahalla Management System </a> </button>
	          <div class="dropdown-content">
	          </div>
	        </div>

				<div class="dropdown">
					<button class="dropbtn"><a href="Location.html"> Location </a></button>
						<div class="dropdown-content">
						</div>

			</div>

</div>

	<div>

  </div>

	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.16.1/TweenMax.min.js'></script>
    <script  src="js/js.js"></script>

	<div class="front-block front-block-one">
	<div class="front-block-inner">
		<div class="front-block-content" id="section4" >

			<h1 style="text-align: center;color:black;">Mahallah Management System</h1>
			<div id="panel-6483-0-0-8" class="so-panel widget widget_sow-editor" data-index="8"><div class="so-widget-sow-editor so-widget-sow-editor-base">
		<div class="siteorigin-widget-tinymce textwidget" style= "text-align:center;">
		<a href="insert.php" class="myButton">Add new student</a> 	<a href="search.php" class="myButton">Search Student</a>
		<br> <br>
		<?php
		$username = "root";
		$pass = "";
		$host = "localhost";
	$db="mahallahregistration";
			$conn=mysqli_connect($host,$username,$pass,$db);
	if(!$conn){
	die("Database connection error");
	}


		//execute the SQL query and return records
		$result = mysqli_query($conn,"SELECT * FROM student ");
		?>
		<table id="customers" >
		<thead >
			<tr>
				<th>Student_id</th>
				<th>User Name</th>
				<th>First name</th>
				<th>Last Name</th>
				<th>Status</th>
				<th>Phone</th>
				<th>Email</th>
				<th>action</th>
			</tr>
		</thead>
		<tbody>
			<?php
				while( $row = mysqli_fetch_assoc( $result ) ){ ?>
					<tr>
					 <td><?php echo $row['student_id']; ?></td>
			<td><?php echo $row['st_username']; ?></td>
			<td><?php echo $row['st_fname']; ?></td>
			<td><?php echo $row['st_lname']; ?></td>
			<td><?php echo $row['st_status']; ?></td>
			<td><?php echo $row['st_phone']; ?></td>
		 <td><?php echo $row['st_email']; ?></td>
			 <td ><a style="border:1px solid blue; background-color:#0ccefa;margin-right:5px;color:black;padding:5px;" href="editt.php?id=<?php echo $row['student_id'];?>">Edit</a><a style="border:1px solid blue; background-color:#0ccefa;margin-right:5px;color:red;padding:5px;" href="delete.php?id=<?php echo $row['student_id']; ?>" >Delete</a></td>
				 </tr>
			<?php   }
			?>


		</tbody>
	</table>
	 <?php mysqli_close($conn); ?>


	</p>
	<p>&nbsp;</p>
	</div>
	</div>
	<div style="text-align: center;color:black;">
</p>
<p>&nbsp;</p>
</div>
</div>





</div></div>




<footer class="flex-rw">


  <section class="footer-social-section flex-rw">
      <span class="footer-social-overlap footer-social-connect">
       MORR. All rights reserved. Any inquiries please email our secretariat at mahallah@live.edu.my or call +60183536506
      </span>
      <span class="footer-social-overlap footer-social-icons-wrapper">
				<a href="https://www.pinterest.com/tanveermahmood2489/" class="generic-anchor" target="_blank" title="Pinterest" itemprop="significantLink"><i class="fa fa-pinterest"></i></a>
				<a href="https://www.facebook.com/TanveerMahmoodHasan" class="generic-anchor" target="_blank" title="Facebook" itemprop="significantLink"><i class="fa fa-facebook"></i></a>
				<a href="https://twitter.com/Tanveer2489" class="generic-anchor" target="_blank" title="Twitter" itemprop="significantLink"><i class="fa fa-twitter"></i></a>
				<a href="https://www.instagram.com/tanveermahmoodhasan/" class="generic-anchor" target="_blank" title="Instagram" itemprop="significantLink"><i class="fa fa-instagram"></i></a>
				<a href="https://www.youtube.com/channel/UC01LQebzZXNC5ZWTyC76vYw?view_as=subscriber" class="generic-anchor" target="_blank" title="Youtube" itemprop="significantLink"><i class="fa fa-youtube"></i></a>
				<a href="https://plus.google.com/+Paviliongift/posts" class="generic-anchor" target="_blank" title="Google Plus" itemprop="significantLink"><i class="fa fa-google-plus"></i></a>
      </span>
  </section>

</footer>

</body>
</html>
